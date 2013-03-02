<?php
class DemoModel extends Model {

	function DemoModel(){
		parent::Model();	
	}
	//this function updates the thumbs up click of the user vote
	function updateDownVote($voteId){
		$sql = "UPDATE demo_trn_vote set DOWN_VOTE = DOWN_VOTE+1 WHERE VOTE_ID =?";
		$this->db->query($sql, array($voteId));
		return $this->db->affected_rows();
	}
	//this function updates the thumbs down click of the user vote
	function updateUpVote($voteId){
		$sql = "UPDATE demo_trn_vote set UP_VOTE = UP_VOTE+1 WHERE VOTE_ID =?";
		$this->db->query($sql, array($voteId));
		return $this->db->affected_rows();
	}
?>