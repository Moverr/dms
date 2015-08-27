<?php
/*
#Author: Cengkuru Micheal
10/1/14
10:23 AM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usertype_role_m extends MY_Model
{

    //protected $tablename='incident';
    function __construct()
    {
        parent::__construct();

        //$this->load->modal('usertype_m');
        //$this->get_all_user_groups();
        $this->load->model('permission_m');
        $this->auto_assign_super_user_roles();

    }

    public $_tablename='usertype_roles';
    public  $_primary_key='id';

    function get_all_user_groups()
    {
        foreach(get_active_usertypes() as $usertype)
        {
            //check if the usertype already added
            $where=array
            (
                'usertype'=>$usertype['id'],
                'trash'=>'n'
            );
            //if does not exist add it
            if(!$this->get_where($where))
            {
                //do insert
                $dbdata=array
                (
                    'usertype'=>$usertype['id'],
                );
                $this->create($dbdata);
            }
        }
    }

    function auto_assign_super_user_roles()
    {
        foreach(get_active_permissions() as $permission)
        {
            //prevent duplicate entry
            $where=array
            (
                'permission'=>$permission['id'],
                'usertype'=>'1'
            );
            if(!$this->get_where($where))
            {
                //if its new
                $where['author']=$this->session->userdata('user_id');
               $this->create($where);
            }
        }

    }


}


