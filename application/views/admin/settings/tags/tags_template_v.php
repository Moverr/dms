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
        if (check_my_access('view_tags')) {
            ?>
            <div class="panel panel-default">
                <div class="panel-heading ui-draggable-handle">
                    <h3 class="panel-title">Options</h3>
                </div>
                <div class="panel-body">
                    <?php
                    //if user has permission
                    if (check_my_access('add_tag')) {
                        ?>

                        <a class="btn btn-danger btn-block"
                           href="<?= base_url() . $this->uri->segment(1) . '/admin_settings/add_tag' ?>"><span
                                class="fa fa-edit"></span> New tag</a>
                    <?php

                    }

                    ?>

                </div>
                <div class="panel-body list-group">


                    <?php
                    //if user has permission
                    if (check_my_access('view_tags')) {
                        ?>
                        <a href="<?= base_url() . $this->uri->segment(1) . '/admin_settings/tags' ?>"
                           class="list-group-item"><span class="fa fa-calendar"></span> All tags
                            <span class="badge badge-danger"><?= count(get_all_tags()) ?></span>
                        </a>
                    <?php

                    }

                    ?>


                </div>
            </div>
        <?php
        }
        ?>


    </div>
    <!-- END CONTENT FRAME LEFT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body">
        <div class="panel panel-default">
            <div class="panel-body">

                <?= $this->load->view($sub_view) ?>
            </div>
        </div>
    </div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->



