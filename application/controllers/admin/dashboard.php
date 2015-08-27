<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * controls tha administrators view
 */

class Dashboard extends MY_admin_controller
{

    function __construct()
    {
        //load ci controller
        parent::__construct();

        //load user model
        $this->load->model('user_m');
        //$this->output->cache('720');




    }

    //admin home page
    function index()
    {
        $data['main_content']='admin/dashboard/dashboard_home';
        $data['pagetitle']='Dashboard';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);
    }

}
