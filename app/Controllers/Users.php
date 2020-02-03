<?php namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
	protected $session = array();
	public function __construct(){		
		$this->session = \Config\Services::session();	
		
	}

	public function index($page = 'inbox')
	{
        dd($page);
		if(!is_file(APPPATH.'views/pages/lobimail/'.$page.'.php')) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		return view("pages/lobimail/{$page}");
	}
	
	public function signup()
	{
		$this->checkLoggedIn();
		$response = array();
		if ($this->request->getMethod() !== 'post') {
			$response['message'] = 'Post method not found';
			$response['status'] = 0;
		} else {
			$fields = [
				'firstname'		=> 'required',
				'lastname'		=> 'required',
				'username'		=> 'required|is_unique[users.username]',
				'email'        => 'required|valid_email',
				'password'     => 'required',
				'confirm_password' => 'required|matches[password]'				
			];
			$validation = $this->validate($fields);
			if(!$validation) {
				$validation =  \Config\Services::validation();
				$response['message'] = $validation->listErrors();
				$response['status'] = 0;
			} else {
				$userModel = new UserModel();
				$insert = $userModel->insert([
					'firstname'		=> $this->request->getPost('firstname'),
					'lastname'		=> $this->request->getPost('lastname'),
					'username'		=> $this->request->getPost('username'),
					'email'        => $this->request->getPost('email'),
					'roleId'        => 3,
					'password'     => MD5($this->request->getPost('password'))
				]);
				if ($insert) {
					$getUserInfo = $userModel->find($insert);
					unset($getUserInfo['password']);
					unset($getUserInfo['isDeleted']);
					unset($getUserInfo['createdBy']);
					unset($getUserInfo['createdDtm']);
					unset($getUserInfo['updatedBy']);
					unset($getUserInfo['updatedDtm']);


					$getUserInfo['logged_in'] = TRUE;
					$getUserInfo['is_locked'] = FALSE;

					$session = \Config\Services::session();

					$session->set($getUserInfo);

					$response['message'] = 'User create successfull ';
					$response['status'] = 1;
				} else {
					$response['message'] = 'User create failed ';
					$response['status'] = 0;
				}
			}
		}
		echo json_encode($response);
	}
	
    public function autoLogout()
    {
		header('Location: '. base_url('lock') );
		exit();
	}
	
	// Load Lock Screen
	public function lock()
	{
		if( isset( $_SESSION['username'] ) && !empty($_SESSION['username'] ) ) {
			$this->session->set('logged_in', FALSE);
			$this->session->set('is_locked', TRUE);
			return view("users/lock");
		} else {
			header('Location: '. base_url('login') );
			exit(); 
		}
		
	}
	public function unlock()
	{
		$response = array();
		if ($this->request->getMethod() !== 'post') {
			$response['message'] = 'Post method not found';
			$response['status'] = 0;
		} else {
			$fields = [
				'id'		=> 'required',
				'password'     => 'required'			
			];
			$validation = $this->validate($fields);
			if(!$validation) {
				$validation =  \Config\Services::validation();
				$response['message'] = $validation->listErrors();
				$response['status'] = 0;
			} else {
				$userModel = new UserModel();
				
				
				$getUserInfo = $userModel->where([
					'id' => $this->request->getPost('id'),
					'password' => MD5( $this->request->getPost('password') ),
				]) ->findAll();

				if( !empty($getUserInfo) && count($getUserInfo) > 0 ) {
					$this->session->set('logged_in', TRUE);
					$this->session->set('is_locked', FALSE);

					$response['message'] = 'Unlock successfull ';
					$response['status'] = 1;
				} else {
					$response['message'] = 'User not found ';
					$response['status'] = 0;
				}
			}
		}
		
		echo json_encode($response, JSON_FORCE_OBJECT);		
	}
	// Load Login Page
	public function login()
	{
		$this->checkLoggedIn();
		$response = array();
		if ($this->request->getMethod() !== 'post') {
			return view("users/login");
		} else {
			$fields = [
				'username'		=> 'required',
				'password'     => 'required'			
			];
			$validation = $this->validate($fields);
			if(!$validation) {
				$validation =  \Config\Services::validation();
				$response['message'] = $validation->listErrors();
				$response['status'] = 0;
			} else {
				$userModel = new UserModel();
				
				
				$getUserInfo = $userModel->where([
					'username' => $this->request->getPost('username'),
					'password' => MD5( $this->request->getPost('password') ),
				]) ->findAll();

				if( !empty($getUserInfo) && count($getUserInfo) > 0 ) {
					$getUserInfo = $getUserInfo['0'];
					unset($getUserInfo['password']);
					unset($getUserInfo['isDeleted']);
					unset($getUserInfo['createdBy']);
					unset($getUserInfo['createdDtm']);
					unset($getUserInfo['updatedBy']);
					unset($getUserInfo['updatedDtm']);


					$getUserInfo['logged_in'] = TRUE;
					$getUserInfo['is_locked'] = FALSE;

					$session = \Config\Services::session();

					$session->set($getUserInfo);

					$response['message'] = 'Login successfull ';
					$response['status'] = 1;
				} else {
					$response['message'] = 'Username and password not matched ';
					$response['status'] = 0;
				}
			}
		}
		
		echo json_encode($response, JSON_FORCE_OBJECT);		
		
	}

	public function logout()
	{
		$this->session->destroy();
		header('Location: '. base_url('login') );
			exit(); 
	}

	//--------------------------------------------------------------------]
	protected function checkLoggedIn()
    {
		if (isset($_SESSION['logged_in']) && $this->session->get('logged_in') == TRUE) {
			header('Location: '. base_url() );
			exit();
		} else if (isset($_SESSION['is_locked']) && $this->session->get('is_locked') == TRUE)  {
			header('Location: '. base_url('lock') );
			exit();
		} else {
			header('Location: '. base_url('login') );
			exit();
		}
	} 

	

}