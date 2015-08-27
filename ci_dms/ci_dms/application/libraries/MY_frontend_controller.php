<?php
class MY_frontend_controller extends MY_Controller {
    
   
    public function __construct() 
        { 
            parent::__construct();

            //load user model
            $this->load->model('user_m');

            //cache all except the login page
            if (check_live_server()) {
                if ($this->uri->segment(2) <> 'login') {
                    $this->output->cache('21600');//cache the page for a day
                }
            }


        }


    function load_subview($data)
    {
        $this->load->view('public/includes/frontend_template',$data);
    }
}
