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
        <?php
        //if user can view groups
        if (check_my_access('view_mails')) {
            ?>
            <div class="card">

                <div class="card-body text-default-light">



                        <div class="panel-body list-group">


                            <?php
                            //if user has permission
                            if (check_my_access('view_mails')) {
                                ?>
                                <a href="<?= base_url() . $this->uri->segment(1) . '/admin_sitemail' ?>"
                                   class="list-group-item"><span class="fa fa-calendar"></span> inbox</a>

                            <?php

                            }

                            ?>


                        </div>

                </div><!--end .card-body -->
            </div>

        <?php
        }
        ?>


    </div>
    <!-- END CONTENT FRAME LEFT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <?= $this->load->view($sub_view) ?>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->



