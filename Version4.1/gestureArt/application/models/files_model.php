<?php
class Files_Model extends CI_Model {
	//the inser_files function main functionality is to insert the project information within the data base within the files table. the filename, the title, the description, medium, and inspiration
/*
   public function insert_file($filename, $title, $description, $medium, $inspiration)
   {
      $data = array(
         'filename' => $filename,
         'title' => $title,
         'description' => $description,
         'medium' => $medium,
         'inspiration' => $inspiration
      );
      
      
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }
*/
   
   //the inser_files function main functionality is to insert the project information within the data base within the files table. the filename, the title, the description, medium, and inspiration
   
   public function insert_file()
	{
		$data=array(
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'medium'=>$this->input->post('medium'),
			'inspiration'=>$this->input->post('inspiration'),
			);
		$this->db->insert('files',$data);
	}
	
/*
	function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
	}
*/
   
   //the get projects function is pulling all the projects from the database
   public function get_projects() {
   
	   return $this->db->select()
	   ->from('files')
	   ->get()
	   ->result();
   }
   
   //the get_project function is getting a specific project based off of its id from the files table in the database
    public function get_project($id) {
  
	   return $this->db->select()
	   ->from('files')
	   ->where('id', $id)
	   ->get()
	   ->row();
   }
   
   //the update project function is posting the updated info in to the database to a specific project or file based off of its id
   public function update_project() { 
   
    	$this->load->helper('url');
    	
    	$sequel = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'title' => $this->input->post('title'),
			'medium' => $this->input->post('medium'),
			'description' => $this->input->post('description'),
			'inspiration' => $this->input->post('inspiration'),
		
		);
		
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('files', $data);
	
		
   }
	// the delete project function is getting the project id and deleting the project from the files table within the database.
	public function delete_project($id) { 
	
	 	$this->db->where('id', $id);
        $this->db->delete('files');
	}

}
?>