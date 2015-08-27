

<?php
/*
#Author: Cengkuru Micheal
9/12/14
2:47 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>


<div class="card">

    <div class="card-body text-default-light">
        <a class="btn ink-reaction btn-floating-action btn-primary"
                                   href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>"><i class="md md-list"></i></a>
        <?=$this->load->view($this->uri->segment(1).'/blog/forms/edit_blog_f')?>
    </div><!--end .card-body -->
</div>

