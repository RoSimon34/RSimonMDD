<?php
class Files_Model extends CI_Model {

   public function insert_file($filename, $title, $description, $medium, $inspiration)
   {
      $data = array(
         'filename' => $filename,
         'title' => $title,
         'description' => $description
         'medium' => $medium
         'inspiration' => $inspiration
      );
      
      
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }
   
   public function get_projects() {
   
	   return $this->db->select()
	   ->from('files')
	   ->get()
	   ->result();
   }
   
    public function get_project($id) {
  
	   return $this->db->select()
	   ->from('files')
	   ->where('id', $id)
	   ->get()
	   ->row();
   }
   
   
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
	
	public function delete_project($id) { 
	
	 	$this->db->where('id', $id);
        $this->db->delete('files');
	}

}
?>