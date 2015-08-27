<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/16/14
 * Time: 8:22 AM
 *
 * controls notification related helper calls
 */
//get notification
function get_unseen_msg()
{
    $ci=& get_instance();
    $ci->load->model('notification_m');

    //the query
    return $ci->notification_m->get_unseen_messages();
}

function check_if_notification_duplicate($user_id,$notification)
{
    $ci=& get_instance();
    $ci->load->model('notification_m');

    //the query
    return $ci->notification_m->prevent_duplicate_msg($user_id,$notification);
}

function generate_notification($message,$alert_type)
{
    $ci=& get_instance();
    $ci->load->model('notification_m');

    //the query
    return $ci->notification_m->generate_notification($ci->session->userdata('user_id'),$message,$alert_type);
}