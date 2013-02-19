<?php
class Files_Model extends CI_Model {
	
	//Insert file / project info into the database the name of the file, title, and description
   public function insert_file($filename, $title, $description)
   {
      $data = array(
         'filename' => $filename,
         'title' => $title,
         'description' => $description
      );
      
      
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }
   // Get all the projects from the files table in the database
   public function get_projects() {
   
	   return $this->db->select()
	   ->from('files')
	   ->get()
	   ->result();
   }
   // Get a single project based on itd ID from the files table
    public function get_project($id) {
  
	   return $this->db->select()
	   ->from('files')
	   ->where('id', $id)
	   ->get()
	   ->row();
   }
   
   //Update a project by getting its ID and pull the title and description and input the changes into the database table
   public function update_project() { 
   
    	$this->load->helper('url');
    	
    	$sequel = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
		
		);
		
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('files', $data);
	
		
   }
	// Delete a selected project based on its ID where its ID's match in the database
	public function delete_project($id) { 
	
	 	$this->db->where('id', $id);
        $this->db->delete('files');
	}

}
?>