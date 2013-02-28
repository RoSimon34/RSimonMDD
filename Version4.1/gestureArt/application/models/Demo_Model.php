<?php
class DemoModel extends Model {

	function DemoModel(){
		parent::Model();	
	}

	function updateDownVote($voteId){
		$sql = "UPDATE demo_trn_vote set DOWN_VOTE = DOWN_VOTE+1 WHERE VOTE_ID =?";
		$this->db->query($sql, array($voteId));
		return $this->db->affected_rows();
	}

	function updateUpVote($voteId){
		$sql = "UPDATE demo_trn_vote set UP_VOTE = UP_VOTE+1 WHERE VOTE_ID =?";
		$this->db->query($sql, array($voteId));
		return $this->db->affected_rows();
	}
?>