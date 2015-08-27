<!DOCTYPE html>
<html lang="en">
<head>


    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">


    <?php
    //kill the back button on log out
    $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
    $this->output->set_header('Pragma: no-cache');
    ?>

    <title><?=isset($pagetitle)?$pagetitle:get_site_info('sitename')?></title>
    <script src="<?=base_url()?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>

    <script src="<?=base_url()?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END PLUGINS -->

    <!--CUSTOM STUPH HERE GUYS--->
    <script src="<?= base_url() ?>assets_backend/js/jquery.ui.position.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets_backend/js/jquery.contextMenu.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets_backend/js/screen.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets_backend/css/prettify/prettify.js" type="text/javascript"></script>


    <link href="<?= base_url() ?>assets_backend/css/jquery.contextMenu.css" rel="stylesheet" type="text/css"/>

    <link href="<?= base_url() ?>assets_backend/css/prettify/prettify.sunburst.css" rel="stylesheet" type="text/css"/>


    <link rel='stylesheet' type='text/css' href='<?=base_url()?>assets_backend/assets/plugins/form-tokenfield/bootstrap-tokenfield.css' />
    <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url()?>assets_backend/css/theme-default.css"/>

    <link rel='stylesheet' type='text/css' href='<?=base_url()?>assets_backend/assets/plugins/form-multiselect/css/multi-select.css' />
    <link rel='stylesheet' type='text/css'
          href='<?= base_url() ?>assets_backend/assets/plugins/selectize/css/selectize.bootstrap3.css'/>



    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />


    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets_backend/assets/plugins/jquery_notify/css/jquery.notify.css" />

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/my_alerts.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/PrintArea.css"/>


    <!--END CUSTOM STUPH-->



    <!-- BEGIN MY THEME STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
    <!-- END STYLESHEETS -->



    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->

    <script>
        $(document).ready(function () {
            $('.fancybox').fancybox();
            // Persistent Snipper (auto check for broken images)
            $("img").error(function () {
                $(this).attr("src", "<?=base_url()?>uploads/noimage.png");
            });

        });


    </script>
    <link href='<?= base_url() ?>assets_backend/css/my_admin_overides.css' rel='stylesheet'>
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <?=$this->load->view('admin/parts/sidebar')?>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <?=$this->load->view('admin/parts/navigationbar')?>
        <!-- END X-NAVIGATION VERTICAL -->

        <!-- END BREADCRUMB -->
        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

            <div id="content">
                <section>
