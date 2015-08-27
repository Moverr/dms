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
    <!-- START CONTENT FRAME RIGHT -->
    <div class="content-frame-right">

        <div class="list-group list-group-contacts border-bottom push-down-10">
            <a href="#" class="list-group-item">
                <div class="list-group-status status-online"></div>
                <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk">
                <span class="contacts-title">Dmitry Ivaniuk</span>

                <p>Hello my friend, how are...</p>
            </a>
            <a href="#" class="list-group-item">
                <div class="list-group-status status-online"></div>
                <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali">
                <span class="contacts-title">Nadia Ali</span>

                <p>Wanna se my photos?</p>
            </a>
            <a href="#" class="list-group-item active">
                <div class="list-group-status status-online"></div>
                <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe">

                <div class="contacts-title">John Doe <span class="label label-danger">5</span></div>
                <p>This project is awesome</p>
            </a>
            <a href="#" class="list-group-item">
                <div class="list-group-status status-away"></div>
                <img src="assets/images/users/user4.jpg" class="pull-left" alt="Brad Pitt">
                <span class="contacts-title">Brad Pitt</span>

                <p>ok</p>
            </a>
            <a href="#" class="list-group-item">
                <div class="list-group-status status-offline"></div>
                <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Darth Vader">
                <span class="contacts-title">Darth Vader</span>

                <p>We should win this war!!!1</p>
            </a>
            <a href="#" class="list-group-item">
                <div class="list-group-status status-offline"></div>
                <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Kim Kardashian">
                <span class="contacts-title">Kim Kardashian</span>

                <p>You received a letter from Darth?</p>
            </a>
            <a href="#" class="list-group-item">
                <div class="list-group-status status-offline"></div>
                <img src="assets/images/users/no-image.jpg" class="pull-left" alt="Jason Statham">
                <span class="contacts-title">Jason Statham</span>

                <p>Lets play chess...</p>
            </a>
        </div>

        <div class="block">
            <h4>Status</h4>

            <div class="list-group list-group-simple">
                <a href="#" class="list-group-item"><span class="fa fa-circle text-success"></span> Online</a>
                <a href="#" class="list-group-item"><span class="fa fa-circle text-warning"></span> Away</a>
                <a href="#" class="list-group-item"><span class="fa fa-circle text-muted"></span> Offline</a>
            </div>
        </div>

    </div>
    <!-- END CONTENT FRAME RIGHT -->
    <!-- END CONTENT FRAME LEFT -->

    <!-- START CONTENT FRAME BODY -->
    <div class="content-frame-body content-frame-body-left">


        <?= $this->load->view($sub_view) ?>
    </div>

    <!-- END CONTENT FRAME BODY -->


</div>
    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->



