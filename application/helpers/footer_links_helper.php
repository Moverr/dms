<?php
function get_active_footer_links(){
    $ci =& get_instance();
    $ci->load->model('footer_link_m');

    return $ci->footer_link_m->get_all();
}

function get_footer_link_info_by_id($id='',$param=''){
    $ci =& get_instance();
    $ci->load->model('footer_link_m');

    return $ci->footer_link_m->get_footer_link_info($id,$param);
}

 