<?php
class Files_Model extends CI_Model {

   //the inser_files function main functionality is to insert the project information within the data base within the files table. the filename, the title, the description, medium, and inspiration
   
   public function insert_file()
	{
		$data=array(
			'title'=>$this->input->post('title'),
			'file'=>$this->input->post('file'),
			'description'=>$this->input->post('description'),
			'medium'=>$this->input->post('medium'),
			'inspiration'=>$this->input->post('inspiration'),
			);
		$this->db->insert('files',$data);
	}
   
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
   
   /*
public function get_project($id) {
  
	   $this->db->select("*");
	   $this->db->from("files");
	   
	   $this->db->where("user_id",$id);
	   $query=$this->db->get("files");
	   return $query->result_array();
   }
*/
   

   
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