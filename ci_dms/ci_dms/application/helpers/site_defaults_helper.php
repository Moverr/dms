<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 03/07/14
 * Time: 01:55
 */
//helper to get site defaults
function helper_get_site_defaults($param='')
{
    $ci=& get_instance();
    $ci->load->model('site_defaults_m');

    return $ci->site_defaults_m->get_site_defaults($param);
}

function get_site_address()
{
    $ci=& get_instance();
    ?>
    <h2>Address</h2>
    <address>
        <strong><?=$ci->config->item('site_name')?></strong><br>
        <?=$ci->config->item('site_address')?><br>
        <?=$ci->config->item('site_postal_address')?><br>
        <abbr title="Phone">P:</abbr> <?=$ci->config->item('site_tel')?><br>
        <abbr title="Phone">Fax:</abbr> <?=$ci->config->item('site_fax')?>
    </address>

    <address>
        <strong>Email</strong><br>
        <a href="mailto:<?=$ci->config->item('site_email')?>"><?=$ci->config->item('site_email')?></a>
    </address>
<?php

}