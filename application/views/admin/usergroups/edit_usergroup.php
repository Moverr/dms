<?php
/*
#Author: Cengkuru Micheal
9/16/14
2:40 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//var_dump(get_usertype($this->session->userdata('edit_id')));
//get edit variables

?>
<div class="card">

    <div class="card-body text-default-light">
        <?=$this->load->view('admin/usergroups/forms/edit_usertype_f')?>
    </div><!--end .card-body -->
</div>
