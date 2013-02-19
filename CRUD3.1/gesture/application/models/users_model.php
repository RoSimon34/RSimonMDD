<?php
class Users_model extends CI_Model {

	public function __construct() {
	
		$this->load->database();
	}
	
	public function get_users($id = FALSE) {
	
		if ($id === FALSE) {
		
			$query = $this->db->get('users');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('users', array('users_id' => $id));
		return $query->row_array();
	}
	public function set_users() {
	
		$this->load->helper('url');
		
		$sequel = url_title($this->input->post('firstname'), 'dash', TRUE);
		
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'position' => $this->input->post('position'),
			'info' => $this->input->post('info')
		);
		
		return $this->db->insert('users', $data);
	}
	
	function delete_user($id){
		
        $this->db->where('users_id', $id);
        $this->db->delete('users');

    }
    
    function update_user()
    {
    	$this->load->helper('url');
		
		$sequel = url_title($this->input->post('firstname'), 'dash', TRUE);
		
		$data = array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'position' => $this->input->post('position'),
			'info' => $this->input->post('info')
		);
		$this->db->where('users_id', $this->input->post('user_id'));
		return $this->db->update('users', $data);
		
    }

	
}
?>