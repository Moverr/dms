<?php
/*
#Author: Cengkuru Micheal
9/16/14
2:40 PM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
//var_dump(get_usertype($this->session->userdata('edit_id')));
//get edit variables

?>


<div class="panel panel-default">
    <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title">Edit</h3>
    </div>
    <div class="panel-body">
        <?= $this->load->view('admin/user_types/forms/edit_usertype_f') ?>
    </div>
</div>





 