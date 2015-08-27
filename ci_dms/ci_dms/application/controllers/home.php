<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/15/14
 * Time: 7:53 AM
 */
class Home extends MY_frontend_controller
{

    function __construct()
    {
        //load ci controller
        parent::__construct();

        $this->load->model('blog_m');
        $this->load->model('blog_category_m');


    }

    function index()
    {
        redirect(base_url().'admin/login');
    }

    //backup db every 1hr
    function fallback(){
        $host=$this->db->hostname;
        $username=$this->db->username;
        $password=$this->db->password;
        $db=$this->db->database;
        //print_array($password);
        backup_database($username, $password,$host, $db);

    }


}
