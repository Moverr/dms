<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 12/6/2014
 * Time: 4:28 AM
 */
function get_active_permissions()
{
    $ci =& get_instance();
    $ci->load->model('permission_m');
    $where = array
    (

        'trash' => 'n'
    );

    return $ci->permission_m->get_where($where);
}

function get_permission_info($id, $param)
{
    $ci =& get_instance();
    $ci->load->model('permission_group_m');

    return $ci->permission_m->get_permission_info($id, $param);
}

function get_permissions_by_section($section)
{
    $ci =& get_instance();
    $ci->load->model('permission_m');
    $where = array
    (
        'section' => $section,

        'trash' => 'n'
    );

    return $ci->permission_m->get_where($where);
}

function get_permission_info_by_code($code, $param)
{
    $ci =& get_instance();
    $ci->load->model('permission_m');

    return $ci->permission_m->get_permission_info_by_code($code, $param);
}

function check_permission_by_group($code, $group)
{
    $ci =& get_instance();
    $ci->load->model('groupaccess_m');
    //echo get_permission_info_by_code($code,'id');
    $where = array(
        'permissionid' => get_permission_info_by_code($code, 'id'),
        'groupid' => $group

    );
    //print_array($where);

    return $ci->groupaccess_m->get_where($where);

}

function load_access_denied_page()
{
    $ci =& get_instance();
    $data['main_content']='error_pages/access_denied_v';
    $data['pagetitle']=' Access Denied';



    //display register form
    $ci->load_subview($data);
}
