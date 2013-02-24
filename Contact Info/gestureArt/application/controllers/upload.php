<?php
class Upload extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      
      $this->load->model('files_model');
      $this->load->database();
      $this->load->helper('url');
   }
   public function index()
   {
   		/* $this->load->view('templates/header'); */
		$this->load->view('welcome');
		/* $this->load->view('templates/footer'); */
   }
   
   
   public function upload_file() {
   
	   $status = "";
	   $msg = "";
	   $file_element_name = 'userfile';
	   if (empty($_POST['title']))
	   {
	      $status = "error";
	      $msg = "Please enter a title";
	   }
	   if ($status != "error")
	   {
	      $config['upload_path'] = './files/';
	      $config['allowed_types'] = 'gif|jpg|png|doc|txt';
	      $config['max_size']  = 1024 * 8;
	      $config['encrypt_name'] = TRUE;
	      $this->load->library('upload', $config);
	      if (!$this->upload->do_upload($file_element_name))
	      {
	         $status = 'error';
	         $msg = $this->upload->display_errors('', '');
	      }
	      else
	      {
	         
	         $data = $this->upload->data();
	         
	         $file_id = $this->files_model->insert_file($data['file_name'], $_POST['title'], $_POST['description'], $_POST['medium'], $_POST['inspiration']);
	         
	         
	         if($file_id)
	         {
	            $status = "success";
	            $msg = "File successfully uploaded";
	            redirect('upload');
	         }
	         else
	         {
	            unlink($data['full_path']);
	            $status = "error";
	            $msg = "Something went wrong when saving the file, please try again.";
	         }
	      }
	      @unlink($_FILES[$file_element_name]);
	   }
	   echo json_encode(array('status' => $status, 'msg' => $msg));
   }
   
   public function files() {
   
	   $files = $this->files_model->get_projects();
	   $this->load->view('currentProjects', array('files' => $files));
	   
   }
   
   
   public function projectsView() {
  echo "tesT";
	   $files = $this->files_model->get_projects();
	   
	   $data['files'] = array('files' => $files);
	   error_log('332211',0);
	   error_log($data,0);
	   exit;
	  /*  $this->load->view('pages/home', $data); */
	   
   }
   
   
   public function individualProject($id) {
   
	   $files = $this->files_model->get_project($id);
	   $this->load->view('individualP', array('files' => $files));
	   
   }
   
   public function deleteProject($id) {
	   
	   if(!$this->session->userdata('logged_in')){
		   
		   redirect('pages');
	   }else{
		   
		   $this->files_model->delete_project($id);
		   redirect('upload');
	   }
   }
   
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
			$this->form_validation->set_rules('desription', 'desription', 'required');
			$this->form_validation->set_rules('medium', 'medium', 'required');
			$this->form_validation->set_rules('inspiration', 'inspiration', 'required');
			$id['id'] = $this->uri->segment(3);
			$data = $this->files_model->get_project($id);
			$project_data = array(
				'project_data'=>$data
			);
			
			
			if ($this->form_validation->run() === FALSE){
			
				$this->load->view('templates/header', $id);
				$this->load->view('projects/editProject', $project_data);
				$this->load->view('templates/footer');
				
			}else {
				
				
			}

		}
	}
	
	public function updateProject(){
	
		if(!$this->session->userdata('logged_in')){
			
			redirect('pages');
			
		}else{
		
			$this->load->helper('url');
			$id = $this->uri->segment(3);
			$_POST['id'] = $this->uri->segment(3);
			$this->files_model->update_project($id);
			redirect('upload');
		}
	}
   
}