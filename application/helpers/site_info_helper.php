<?php
function get_site_info($field)
{
    $ci =& get_instance();

    $ci->load->model('site_info_m');

    //get all adverts
    return $ci->site_info_m->get_info($field);
}


function get_site_logo_info($field)
{
    $ci =& get_instance();

    $ci->load->model('site_logo_m');
    $ci->site_logo_m->get_all();
    //get all adverts
    return $ci->site_logo_m->get_info($field);
}

 