<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 12/6/2014
 * Time: 4:28 AM
 */
function get_active_permission_groups()
{
    $ci=& get_instance();
    $ci->load->model('permission_group_m');
    $where=array
    (

        'trash'     =>'n'
    );

    return $ci->permission_group_m->get_where($where);
}

function get_permission_group_info($id,$param)
{
    $ci=& get_instance();
    $ci->load->model('permission_group_m');

    return $ci->permission_group_m->get_permission_group_info($id, $param);
}

function get_inactive_permission_groups()
{
    $ci=& get_instance();
    $ci->load->model('permission_group_m');
    $where=array
    (

        'trash'     =>'y'
    );

    return $ci->permission_group_m->get_where($where);
}
