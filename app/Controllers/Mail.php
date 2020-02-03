<?php namespace App\Controllers;

class Mail extends BaseController
{
	public function index($page = 'inbox')
	{
        // dd($page);
		if(!is_file(APPPATH.'views/pages/lobimail/'.$page.'.php')) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		return view("pages/lobimail/{$page}");
	}
	

	//--------------------------------------------------------------------

}
