<?php
class admin extends My_Controller 
{
    public function Admin_login()
    {
       // Login Validation Logic.... 

       $this->form_validation->set_rules('uname','User Name','required');
       $this->form_validation->set_rules('pass','Password','required');
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
       if($this->form_validation->run())
       {
           echo "Validation done..";
       } 
       else
       {
           $this->load->view('users/Article_List');
       }
    }
}

?>