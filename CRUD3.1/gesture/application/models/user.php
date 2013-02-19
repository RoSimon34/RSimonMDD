<?php
Class User extends CI_Model{
	//
	function login(){
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this -> db -> select('id, username, password');
		$this -> db -> from('admin');
		$this -> db -> where('username = ' . "'" . $username . "'");
		/* $this -> db -> where('password = ' . "'" . MD5($password) . "'"); */
		$this -> db -> where('password = ' . "'" . MD5($password) . "'");
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1){
			$row = $query->row_array();
			$result = array(
				'username'=> $row['username'],
				'id'=> $row['id'],
				'logged_in'=> TRUE
			
			);
		 return $result;
		}else{
		
		 return false;
		}
	
	}
}
?>