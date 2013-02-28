<?php
class Demo extends Controller {

	function Demo(){
		parent::Controller();
		$this->load->model('DemoModel');
	}

	public function index(){

		$voteId=  $this->input->post('voteId');
		$upOrDown=  $this->input->post('upOrDown');

		$status ="false";
		$updateRecords = 0;
		
		if($upOrDown='up_vote'){
			$updateRecords = $this->DemoModel->updateUpVote($voteId);
		}else{
			$updateRecords = $this->DemoModel->updateDownVote($voteId);
		}

		if($updateRecords>0){
			$status = "true";
		}
		echo $status;
	}
}
?>