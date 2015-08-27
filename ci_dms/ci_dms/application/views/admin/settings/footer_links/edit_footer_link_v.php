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
<div style="margin-top: 10px">
    <div class="card">

        <div class="card-body text-default-light">
            <p>
                <a class="btn ink-reaction btn-floating-action btn-primary"
                   href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) ?>/footer_links"><i class="fa fa-bars"></i></a>
            </p>

            <?=$this->load->view('admin/settings/footer_links/forms/edit_footer_link_f')?>

        </div><!--end .card-body -->
    </div>

</div>





 