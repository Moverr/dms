<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * controls tha administrators view
 */

class Admin_usergroups extends MY_admin_controller
{

    function __construct()
    {
        //load ci controller
        parent::__construct();




    }

    //admin home page
    function index()
    {
        $data['main_content']='admin/usergroups/usergroup_home';
        $data['pagetitle']='User groups';


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
        $data['main_content']='admin/usergroups/edit_usergroup';
        $data['pagetitle']='Edit User group';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);


    }

    function ajax_calls()
    {

    }


    function permissions()
    {
        $usertype_info = $this->usertype_m->get_by_id(decryptValue($this->uri->segment(4)));
        if ($usertype_info)
        {

            $data['main_content']='admin/usergroups/permissions_config_v';
            $data['pagetitle']='Edit User group Permissions';


            //load the admin dashboard view
            $this->load->view('admin/includes/admin_template',$data);
        }
        else
        {
            show_404();
        }

    }

    function delete_group()
    {
        //if user has permission
        if (check_my_access('delete_user_group')) {
            $data['main_content']='admin/usergroups/delete_usergroup_v';
            $data['pagetitle']='Delete User group';


            //load the admin dashboard view
            $this->load->view('admin/includes/admin_template',$data);
        } else {
            load_access_denied_page();
        }


    }



}
