<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 2/3/2015
 * Time: 6:45 PM
 */
?>
<div class="card">
    <div class="card-body text-default-light">
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary"
                                       href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) ?>"><i class="md md-list"></i></a>
        </p>
        <?= $this->load->view('admin/about_us/forms/change_about_us_cover_f') ?>
    </div><!--end .card-body -->
</div>


