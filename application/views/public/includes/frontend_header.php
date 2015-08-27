<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    //TODO DYAMIC WEBSITE DESCRIPTION FROM THE DATABASE
    ?>
    <?php
    //kill the back button on log out
    $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
    $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
    $this->output->set_header('Pragma: no-cache');
    ?>
    <!-- META SECTION -->
    <meta charset="utf-8">
    <title><?=isset($pagetitle)?$pagetitle:get_site_info('sitename')?></title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <script src="<?=base_url()?>sys_plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="<?=base_url()?>sys_plugins/jquery/jquery-migrate-1.2.1.js"></script>
    <script src="<?=base_url()?>sys_plugins/bootstrap-3.3.5/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="<?=base_url()?>sys_plugins/fancybox/jquery.fancybox.css"
          media="screen"/>


    <!-- Owl Carousel Assets -->
    <link href="<?=base_url()?>sys_plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url()?>sys_plugins/owl.carousel/assets/owl.theme.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets_frontend/css/shadows.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="<?= base_url() ?>css/jquery.dropdown.css" rel="stylesheet">

    <link href="<?=base_url()?>sys_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet"  href="<?=base_url()?>sys_plugins/light-gallery/css/lightGallery.css"/>
    <script src="<?=base_url()?>sys_plugins/light-gallery/js/lightGallery.js"></script>
    <script>
        $(document).ready(function() {
            $("#light-gallery").lightGallery();
        });
    </script>



    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets_frontend/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets_frontend/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets_frontend/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets_frontend/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= base_url() ?>assets_frontend/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets_frontend/js/libs/utils/respond.min.js?1403934956"></script>
    <link href='<?= base_url() ?>css/bootstrap-inputs-min.css' rel='stylesheet'>





    <!-- EOF CSS INCLUDE -->
    <script>
        $(document).ready(function () {
            $('.fancybox').fancybox();
            // Persistent Snipper (auto check for broken images)
            $("img").error(function () {
                $(this).attr("src", "<?=base_url()?>uploads/noimage.png");
            });

        });


    </script>

    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets_frontend/css/my_overrides.css" />
</head>
<body class="menubar-hoverable header-fixed ">

<!-- BEGIN HEADER-->
<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="../../html/dashboards/dashboard.html">
                            <span class="text-lg text-bold text-primary"> <img src="<?= base_url() ?>images/me.jpg" width="48" height="48px"
                                                                               class="img-circle " alt="<?= SITE_OWNER ?>"/> <?= SITE_OWNER ?></span>
                        </a>
                    </div>
                </li>



            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">

            <ul class="header-nav header-nav-options">

                <li><a href="badges.html">Home</a></li>

                <li><a href="badges.html">Archive</a></li>
                <li><a href="badges.html">Photos</a></li>
                <li><a href="badges.html">Videos</a></li>
                <li><a href="badges.html">Downloads</a></li>
                <li><a href="badges.html">Contact me</a></li>
                <li>
                    <!-- Search form -->
                    <form class="navbar-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                        </div>
                        <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                    </form>
                </li>

            </ul><!--end .header-nav-options -->

        </div><!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->
