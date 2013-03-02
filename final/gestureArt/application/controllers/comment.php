<?php
 class Comment extends CI_Controller
  {
   function index()
    {
      $this->load->model('commentjquery');
      $data['result'] = $this->commentjquery->get_messages(1);
      var_dump($data);
      $this->load->view('comment_view',$data);
     }
    function insert()
     {
       $this->load->model('commentjquery');
       echo $this->commentjquery->inserttodb();
      }
    }
?>