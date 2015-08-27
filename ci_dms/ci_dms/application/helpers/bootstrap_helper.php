<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 12/6/2014
 * Time: 7:40 AM
 */

function error_template($msg)
{

    ?>
    <div class="alert-message alert-message-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        <p>
            <?= $msg ?></p>
    </div>
<?php
}

function success_template($msg)
{

    ?>
    <div class="alert-message alert-message-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        <p>
            <?= $msg ?></p>
    </div>
<?php
}

function warning_template($msg)
{

    ?>
    <div class="alert-message alert-message-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        <p>
            <?= $msg ?></p>
    </div>

<?php
}

function info_template($msg)
{

    ?>
    <div class="alert-message alert-message-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

        <p>
            <?= $msg ?></p>
    </div>
<?php
}

function bootstrap_panel_basic($content)
{

    ?>
    <div class="panel">
        <div class="panel-body"><?=$content?></div>
    </div>
<?php
}
function bootstrap_panel_primary($content)
{

    ?>
    <div class="panel panel-primary">
        <div class="panel-body"><?=$content?></div>
    </div>
<?php
}

function bootstrap_panel_primary_with_heading($heading,$content)
{

    ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4><?=$heading?></h4>
            <div class="options">
                <a class="panel-collapse" href="#">
                    <i class="fa fa-chevron-down"></i></a>
            </div>
        </div>
        <div class="panel-body"><?=$content?></div>
    </div>
<?php
}

function share_this($uri, $title)
{
    ?>
    <a class="text-primary btn btn-stroke btn-circle btn-primary" style="margin-right: 10px;"
       href="https://www.facebook.com/sharer/sharer.php?u=<?= $uri ?>"><i
            class="fa fa-facebook "></i></a>  <a class="text-success btn btn-stroke btn-circle btn-primary"
                                                 style="margin-right: 10px;"
                                                 href="https://twitter.com/home?status=<?= $uri ?>"><i
        class="fa fa-twitter "></i></a>  <a class="text-info btn btn-stroke btn-circle btn-primary"
                                            style="margin-right: 10px;"
                                            href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $uri ?>&title=<?= $title ?>&summary=&source="><i
        class="fa fa-linkedin "></i></a>  <a class="text-danger btn btn-stroke btn-circle btn-primary"
                                             style="margin-right: 10px;"
                                             href="https://plus.google.com/share?url=<?= $uri ?>"><i
        class="fa fa-google-plus "></i></a>
<?php
}
