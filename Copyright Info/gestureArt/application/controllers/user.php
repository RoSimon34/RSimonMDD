<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	//__contruct function is call the uer_model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	//The index function is stating that if the user is loged in go to the welcom page if not go to the home page
	public function index()
	{
		if(($this->session->userdata('user_name')!=""))
		{
			$this->welcome();
		}
		else{
			$data['title']= 'Home';
			$this->load->view("registration_view.php", $data);
		}
	}
	//welcome function below is calling the welcome_view and pull data which is attached
	public function welcome()
	{
		$data['title']= 'Welcome';
		$this->load->view('welcome_view.php', $data);
	}
	//the login function is posting the required data to the database and the password is MD5, if the results match go to the welcome page if not redirect to the home page.
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	//the thank function is being fired if and when a new user registers to become a member $data is being attached and redirecting the user to the thank you page where they have to login as a user with there info
	public function thank()
	{
		$data['title']= 'Thank';
		$this->load->view('thank_view.php', $data);
	}
	//the registration function is loading the form validation i am then setting the rules to check by for errors. if the it is false kick the user back to the home page if it is correct add the user to the database and kick them to the thank you page where they will then login
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->user_model->add_user();
			$this->thank();
		}
	}
	//for the logut function i am basicaly destroying the session and kicking the user back to the home page when they perform the action of logout.
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->index();
	}
}
?>