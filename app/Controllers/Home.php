<?php namespace App\Controllers;

use App\Libraries\Multi_menu;

class Home extends BaseController
{

	protected $session = array();
	protected $data = array();

	public function __construct(){		
		$this->session = \Config\Services::session();
		helper('url');
	
		$this->checkLoggedIn();		
		
	}

	public function index($page = 'dashboard')
	{
		//dd($page);
		$menuLibrary = new Multi_menu();
		$this->data['menus'] = $menuLibrary->build_menu();
		return view('includes/index', $this->data);
	}
	
	// LOAD ALL PAGES
	public function loadPages($page = 'dashboard')
	{
		// dd($page);
		if(!is_file(APPPATH.'views/pages/'.$page.'.php')) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		return view("pages/{$page}");
	}

	//--------------------------------------------------------------------

	protected function checkLoggedIn()
    {
        //Checks if user is LOGGED IN 
        if ( !isset($_SESSION['is_locked']) || $this->session->get('is_locked') ) {
			header('Location: '. base_url('users/autoLogout') );
			exit();
		}
		if (!isset($_SESSION['logged_in']) || $this->session->get('logged_in') == FALSE) {
			header('Location: '. base_url('login') );
			exit();
		}
	} 
	
}
