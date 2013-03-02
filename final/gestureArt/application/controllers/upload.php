<?php
class Upload extends CI_Controller {
	//the __contruct function is loading the files_model, database, and url helper
   public function __construct()
   {
   		
      parent::__construct();
      
      $this->load->model('files_model');
      
      $this->load->database();
      $this->load->helper('url');
      
   }
   //the index function is loading the welcome page / view
   public function index()
   {	
   		var_dump($data);
		$this->load->view('welcome', $data);
		
   }
   
   /*
$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[4]|max_length[255]');
		$this->form_validation->set_rules('inspiration', 'Inspiration', 'trim|required|min_length[4]|max_length[255]');
*/

   public function Upload_file()
	{
		
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('file', 'File Upload', 'required');
		$this->form_validation->set_rules('medium', 'Medium', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('inspiration', 'Inspiration', 'trim|required|min_length[4]');
				
		if($this->form_validation->run() == FALSE)
		{
			//$this->index();
		}
		else
		{
			$this->files_model->insert_file();
			
		}
	}
	
		   
   public function files() {
   		
   		$id = $this->session->userdata('user_id');
	   $files = $this->files_model->get_projects($id);
	   $data = array('projectdata'=>$files);
	   $this->load->view('currentProjects',$data);
	   
   }

   
   //the project view function is getting all the projects from the files_model and the get_projects function within the files model it is getting an array containing all the files
   public function projectsView() {
	   /* echo "tesT"; */
	   $files = $this->files_model->get_projects();
	   
	   $data['files'] = array('files' => $files);
	   error_log('332211',0);
	   error_log($data,0);
	   exit;
	  /*  $this->load->view('pages/home', $data); */
	   
   }
   
   
   
   // the individual project function is getting the id of the selected project and pull the data pertain to that specific file or project and presenting all its data to the user.
   public function individualProject($id) {
   
	   $files = $this->files_model->get_project($id);
	   $this->load->view('registration_view', array('files' => $files));
	   
   }
   
   public function deleteProject() {
	   
	   if(!$this->session->userdata('logged_in')){
		   
		   redirect('index');
	   }else{
		   
		   var_dump($_GET["id"]);
		   $this->files_model->delete_project($_GET["id"]);
		   
	   }
   }
   
   /* this function is for the update functionality of the application if the user is logged in give them the ability to update a project, validate the form inputs,*/

   function editProject(){

		if(!$this->session->userdata('logged_in')){
			
			redirect('pages');
		
		}else{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper('url');
			
			$data['title'] = 'Update Project';
			
			$id = $this->uri->segment(3);
			$this->form_validation->set_rules('title', 'title', 'required');
			$this->form_validation->set_rules('medium', 'medium', 'required');
			$this->form_validation->set_rules('desription', 'desription', 'required');
			$this->form_validation->set_rules('inspiration', 'inspiration', 'required');
			$id['id'] = $this->uri->segment(3);
			$data = $this->files_model->get_project($id);
			$project_data = array(
				'project_data'=>$data
			);
			
			
			if ($this->form_validation->run() === FALSE){
			
				/* $this->load->view('upload/editProject', $project_data, $id); */
				echo(json_encode($data));
				
			}else {
				
				
			}

		}
	}
	
	//update project function is getting the project id and update that information with the database based of the id
	public function updateProject(){
	
		if(!$this->session->userdata('logged_in')){
			
			redirect('index');
			
		}else{
		
			/*
$this->load->helper('url');
			$id = $this->uri->segment(3);
			$_POST['id'] = $this->uri->segment(3);
*/
			$this->files_model->update_project($_POST);

		}
	}
   
}