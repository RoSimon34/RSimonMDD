<?php

class Pages extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('files_model'); //loads the model to be used throughout the controller
		$this->load->model('users_model');
		$this->load->model('user','',TRUE);
		$this->load->helper('url');
	}
	// load the index / home page along with the header and footer
	public function index()
	{
		$page = 'home';
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	// Load the login view, load the url helper for the form, load the login view with the header and footer
	public function login(){
    	$this->load->view('templates/header');
    	$this->load->helper(array('form', 'url'));
    	$this->load->view('pages/login_view');
    	$this->load->view('templates/footer');
	}
	//Check for a valid username and password against the info in the database if the login is valid log the user in if not redirect to the admin view
	public function verifylogin()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     $this->load->view('templates/header');
	     $this->load->view('pages/login_view');
	     $this->load->view('templates/footer');
	   }
	   else
	   {
	     //Go to private area
	     redirect('admin');
	   }
	
	 }
	 
	 public function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	
	   //query the database
	   $data = $this->user->login();
	
	   if($data)
	   {
	     $this->session->set_userdata($data);
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }
	
}
?>