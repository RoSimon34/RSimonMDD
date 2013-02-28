<?php
 class Comment extends CI_Controller
  {
   function index()
    {
      
      $data['result'] = $this--->db->get('message')->result();
      $this->load->view('comment_view',$data);
     }
    function insert()
     {
       $this->load->model('commentjquery');
       echo $this->commentjquery->inserttodb();
      }
    }
?>