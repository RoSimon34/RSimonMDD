<?php

class Admin extends CI_Controller {



    public function __construct(){
	    
	 parent :: __construct();
	 //if the user is not logged in redirect to pages
	 $this->load->model('user','',TRUE);
	 $this->load->helper('url');
	 if(!$this->session->userdata('logged_in')){
		 
		 redirect('pages/index');
	 };
		    
    }
    //Load the admin view with the header and footer
    public function index(){
	   $data['username'] = $this->session->userdata('username'); 
	   $this->load->view('templates/header');
	   $this->load->view('pages/admin_view', $data);
	   $this->load->view('templates/footer');
	   
    }
    //If the user logs out kill the session basically and redirect to the home page which is call the pages controller
	public function logout()
	{
		$data = array(
				'username'=> '',
				'id'=> '',
				'logged_in'=> FALSE
			
		);
		$this->session->unset_userdata($data);
		redirect('pages');
	}
}
?>