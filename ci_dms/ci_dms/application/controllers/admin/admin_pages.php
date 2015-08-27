<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * controls tha administrators view
 */

class Admin_pages extends MY_admin_controller
{

    function __construct()
    {
        //load ci controller
        parent::__construct();




    }

    //admin home page
    function index()
    {
        $data['main_content']='admin/pages/pages_home';
        $data['pagetitle']='Page Listing';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);
    }






}
