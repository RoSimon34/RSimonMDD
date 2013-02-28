<?
    class Commentjquery extends CI_Model
    {
        
        public function inserttodb()
        {
            if(!empty($_POST))
            {
                $username = $this->input->post('username');
                $email    = $this->input->post('email');
                $message = $this->input->post('message');
                
                $commentArray = array(
                  'username' =>   $username,
                  'email'    =>   $email,
                  'message'  =>   $message
                    
                );
                $this->db->insert('message',$commentArray);
                return $this->returnMarkup($username,$email,$message);
             }
           
            
        }
         private function returnMarkup($name,$email,$message)
         {
             
             return '<div><p>Username : '.$name.'</p>
                    <p>email : '.$email.'</p>
                    <p>Message : '.$message.'</p>
            </div>';
         }
    }