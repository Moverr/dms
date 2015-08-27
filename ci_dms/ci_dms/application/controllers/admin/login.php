<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 04/07/14
 * Time: 02:07
 */
class Login extends MY_frontend_controller
{
    function __construct()
    {
        parent::__construct();



    }

    function index()
    {
        //print_array(get_all_session_data());


        $data['main_content'] = 'admin/login/login_v';
        $data['page_title'] = 'User Login';


        //pass to view
        $this->load->view('admin/includes/login/login_template', $data);


    }

    function register()
    {
        //print_array(get_all_session_data());


        $data['main_content'] = 'admin/login/register_v';
        $data['page_title'] = 'User registration';

        //pass to view
        $this->load->view('admin/includes/login_template', $data);


    }


    //to logout user
    function logout(){


    }

}