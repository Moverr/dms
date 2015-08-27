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
        if (check_my_access('view_user_groups')) {
            ?>
            <div class="card">

                <div class="card-body text-default-light">
                    <div class=" list-group">
                        <a href="<?= base_url() . $this->uri->segment(1) . '/usertypes/page' ?>"
                           class="list-group-item"><i class="md md-assignment-ind"> Groups</i></a>
                        <a href="<?= base_url() . $this->uri->segment(1) . '/users/page' ?>" class="list-group-item"><i class="md md-account-child"> All users </i></a>
                        <a href="<?= base_url() . $this->uri->segment(1) . '/users/add' ?>" class="list-group-item"><i class="md md-create"> Add user</i></a>

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



