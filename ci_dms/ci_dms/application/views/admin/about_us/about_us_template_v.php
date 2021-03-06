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
               <div class="list-group">


                   <?php
                   //if user has permission
                   if (check_my_access('view_about_us_articles')) {
                       ?>
                       <a href="<?= base_url() . $this->uri->segment(1) . '/admin_about_us' ?>"
                          class="list-group-item"><span class="fa fa-calendar"></span> All articles</a>

                       <a href="<?= base_url() . $this->uri->segment(1) . '/admin_about_us/about_us_categories' ?>"
                          class="list-group-item"><span class="fa fa-meh-o"></span> All categories </a>
                   <?php

                   }

                   if (check_my_access('view_image')) {
                       ?>
                       <a href="<?= base_url() . $this->uri->segment(1) . '/admin_organigram_images' ?>"
                          class="list-group-item"><span class="fa fa-calendar"></span> Team members</a>

                       <a href="<?= base_url() . $this->uri->segment(1) . '/admin_organigram_levels' ?>"
                          class="list-group-item"><span class="fa fa-calendar"></span> Team positions</a>


                   <?php
                   }

                   ?>


               </div>
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



