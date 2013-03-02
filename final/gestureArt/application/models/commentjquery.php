<?
    class Commentjquery extends CI_Model
    {
        /* This function adds the comment / message information to the message table in the database */
        public function add_message()
        {
	        
			$data=array(
				'project_id'=>$this->input->post('id'),
				'username'=>$this->input->post('username'),
				'message'=>$this->input->post('message')
				);
			$this->db->insert('message',$data);  
			    
            
        }
        
         /*
private function returnMarkup($name,$message)
         {
             
             return '<div><p>Username : '.$name.'</p>
                    <p>Message : '.$message.'</p>
            </div>';
         }
*/
         
         /* This function gets all the comment / message from the message table in the database and the projectID along with that*/
         public function get_messages($id) {
	   
	         $this->db->select("*");
	         $this->db->from("message");
	         $this->db->where("project_id",$id);
	         $query=$this->db->get();
	         return $query->result_array(); 

		 }
    }