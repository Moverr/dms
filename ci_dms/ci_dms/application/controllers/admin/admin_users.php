<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * controls tha administrators view
 */

class Admin_users extends MY_admin_controller
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
        $data['main_content']='admin/users/users_home';
        $data['pagetitle']='Users';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);
    }



    function add()
    {
        //if user has permission
        if(check_my_access('add_user'))
        {
            //if form is posted
            $data['main_content'] = 'admin/users/add_user_v';
            $data['pagetitle']='Add user';


            //load the admin dashboard view
            $this->load->view('admin/includes/admin_template',$data);

        }
        else
        {
            load_access_denied_page();
        }


    }

    function edit()
    {
        //if user has permission
        $data['main_content'] = 'admin/users/edit_user';
        $data['pagetitle']='Edit user';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);


    }

    function ajax_calls()
    {

    }


    function avatar()
    {
        $data['main_content'] = 'admin/user_types/update_avatar';
        $data['main_content'] = 'admin/users/update_avatar';
        $data['pagetitle']='Update avatar';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);
    }


    //user account
    function account()
    {
        $data['main_content'] = 'admin/users/update_account';
        $data['pagetitle']='Update Account info';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);

    }

    function profile()
    {
        $data['main_content'] = 'admin/users/my_profile_v';
        $data['pagetitle']='User Profile';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);

    }


    function user_logs()
    {

        $data['main_content'] = 'admin/users/user_logs_v';
        $data['pagetitle']='User Activity Log';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);

    }



}
