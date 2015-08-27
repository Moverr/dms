<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 11/2/14
 * Time: 9:59 AM
 */
?>
<!-- START CONTENT FRAME -->
<div class="content-frame">

    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> <?= $pagetitle ?></h2>
        </div>
        <div class="pull-right">
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>
    </div>
    <!-- END CONTENT FRAME TOP -->

    <!-- START CONTENT FRAME LEFT -->
    <div class="content-frame-left">
       <div class="card">

           <div class="card-body text-default-light">


               <?php
               //if user has permission
               if (check_my_access('view_file_categories')) {
                   ?>
                   <a href="<?= base_url() . $this->uri->segment(1) . '/admin_file_categories' ?>"
                      class="list-group-item"><span
                           class="md md-list"></span> File Categories</a>
               <?php

               }

               ?>

           </div><!--end .card-body -->
       </div>



    </div>
    <!-- END CONTENT FRAME LEFT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <div class="block">
            <?= $this->load->view($sub_view) ?>
        </div>

    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->



