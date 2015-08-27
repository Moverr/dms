<div class="row">

    <?php
    if(check_my_access('view_users')){
        ?>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-info no-margin">

                        <div class="btn-group pull-right">

                            <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
                                if(check_my_access('add_users')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/users/add'?>">Add new</a></li>
                                <?php
                                }

                                if(check_my_access('view_users')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/users'?>" >View all</a></li>
                                <?php
                                }
                                ?>




                            </ul>
                        </div>


                        <strong class="text-xl"><?= get_count_active_users() ?></strong><br>
                        <span class="opacity-50"><a href="<?=base_url().$this->uri->segment(1).'/users'?>">User(s)</a></span>

                    </div>
                </div>
                <!--end .card-body -->
            </div>
            <!--end .card -->
        </div>
    <?php
    }

    if (check_my_access('view_user_groups')) {
        ?>
        <!-- BEGIN ALERT - VISITS -->
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-warning no-margin">

                        <div class="btn-group pull-right">

                            <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
                                if(check_my_access('add_user_groups')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/usertypes/add'?>">Add new</a></li>
                                <?php
                                }

                                if(check_my_access('view_user_groups')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/usertypes'?>" >View all</a></li>
                                <?php
                                }
                                ?>




                            </ul>
                        </div>

                        <strong class="text-xl"><?= get_count_active_usertypes() ?></strong><br>
                        <span class="opacity-50"><a href="<?=base_url().$this->uri->segment(1).'/usertypes'?>">Group(s)</a></span>

                    </div>
                </div>
                <!--end .card-body -->
            </div>
            <!--end .card -->
        </div>
        <!--end .col -->
        <!-- END ALERT - VISITS -->
    <?php
    }

    if (check_my_access('view_mails')) {
        ?>
        <!-- BEGIN ALERT - BOUNCE RATES -->
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-danger no-margin">

                        <div class="btn-group pull-right">

                            <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
                                if(check_my_access('write_mails')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/admin_sitemail/new_mail'?>">Write new email</a></li>
                                <?php
                                }

                                if(check_my_access('view_mails')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/admin_sitemail'?>" >View inbox</a></li>
                                <?php
                                }
                                ?>




                            </ul>
                        </div>

                        <strong class="text-xl"><?=count(get_unread_site_mail())?></strong><br>
                        <span class="opacity-50"><a href="<?=base_url().$this->uri->segment(1).'/admin_sitemail'?>">New Mail(s)</a></span>

                    </div>
                </div>
                <!--end .card-body -->
            </div>
            <!--end .card -->
        </div>
        <!--end .col -->
        <!-- END ALERT - BOUNCE RATES -->
    <?php
    }

    if (check_my_access('view_events')) {
        ?>
        <!-- BEGIN ALERT -->
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body no-padding">
                    <div class="alert alert-callout alert-success no-margin">

                        <div class="btn-group pull-right">

                            <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
                                if(check_my_access('add_events')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/admin_events/new_event'?>">New email</a></li>
                                <?php
                                }

                                if(check_my_access('view_events')){
                                    ?>
                                    <li><a href="<?=base_url().$this->uri->segment(1).'/admin_events'?>" >View events</a></li>
                                <?php
                                }
                                ?>




                            </ul>
                        </div>

                        <strong class="text-xl"><?=count(get_upcoming_eventz())?></strong><br>
                        <span class="opacity-50"><a href="<?=base_url().$this->uri->segment(1).'/admin_events'?>">Event(s)</a></span>

                    </div>
                </div>
                <!--end .card-body -->
            </div>
            <!--end .card -->
        </div>
        <!--end .col -->

    <?php
    }
    ?>






</div>
