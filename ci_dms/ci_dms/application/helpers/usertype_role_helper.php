<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 12/8/2014
 * Time: 2:20 PM
 */

function get_roles_by_usertype($usertype_id)
{
    $ci=& get_instance();
    $ci->load->model('usertype_role_m');
    $where=array
    (
        'usertype'          =>$usertype_id,
        'trash'             =>'n'
    );

    return $ci->usertype_role_m->get_where($where);
}

function has_permission($permission,$usertype)
{
    $ci=& get_instance();
    $ci->load->model('usertype_role_m');
    $where=array
    (
        'permission'            =>$permission,
        'usertype'              =>$usertype,
        'trash'                 =>'n'
    );

    return $ci->usertype_role_m->get_where($where);
}