<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
    <!-- TOGGLE NAVIGATION -->
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="md md-format-indent-decrease"></span></a>
    </li>



    <a data-toggle="modal" data-target="#modal_basic" href="#"><i class="md md-apps" style=" padding-top: 10px;font-size: 23px;"></i></a>
    
    
    <!-- END TOGGLE NAVIGATION -->
    <!-- SEARCH -->
    <li class="xn-search">
        <form role="form">
            <input type="text" name="search" placeholder="Search..."/>
        </form>
    </li>




    <!-- MESSAGES -->
    <li class="xn-icon-button pull-right">
        <a href="#"><span class="fa fa-chevron-down"></span></a>

        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">

            <div class="panel-body list-group list-group-contacts scroll">
                <a href=""
                   class="list-group-item">

                    <span class="contacts-title"><span class="md md-account-circle"></span> My Profile</span>

                </a>
                <a href="<?= base_url() . $this->uri->segment(1) . '/admin_users/user_logs' ?>" class="list-group-item">

                    <span class="contacts-title"><span class="md md-assignment"></span> My Activity log</span>

                </a>

                <a href="#" data-box="#mb-signout" class="list-group-item mb-control">

                    <span class="contacts-title"><span class="fa fa-sign-out"></span> Log out</span>

                </a>


            </div>

        </div>
    </li>
    <!-- END MESSAGES -->



    <li class="xn-icon-button pull-right">
        <a href="">Cengkuru</a>
    </li>

    <li class="xn-icon-button pull-right">
        <img style="margin-top: 10px;" width="32px" height="32px" class="img-circle"
             src="<?= base_url() ?>uploads/avatars/avatar.jpg">
    </li>


    <!-- END MESSAGES -->

    <!-- MESSAGES -->
    <li style="margin-right: 10px;" class="xn-icon-button pull-right">
        <a href="#"><span class="fa fa-bell"></span></a>
        <div class="informer informer-danger">4</div>
        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="fa fa-bell"></span> Notifications</h3>
                <div class="pull-right">
                    <span class="label label-danger">4 new</span>
                </div>
            </div>
            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                <a href="#" class="list-group-item">
                    <p>Vote sevo for third term</p>

                </a>
                <a href="#" class="list-group-item">
                    <p>Have you heard this rumor?</p>

                </a>
                <a href="#" class="list-group-item">
                    <p>Mwana eno notification ya ku satu</p>

                </a>
                <a href="#" class="list-group-item">
                    <p>Itye ni ngo?</p>

                </a>
            </div>
            <div class="panel-footer text-center">
                <a href="pages-messages.html">Show all Notifications</a>
            </div>
        </div>
    </li>
    <!-- END MESSAGES -->

</ul>











<div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Modules</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="#" class="">

                                    <div class="informer informer-default">Users</div>
                                    <div class="informer informer-default dir-br"><span class="md md-people"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="<?=base_url().$this->uri->segment(1).'/admin_usergroups'?>" class="">

                                    <div class="informer informer-default">User groups</div>
                                    <div class="informer informer-default dir-br"><span class="md md-group-add"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="<?=base_url().$this->uri->segment(1).'/dashboard'?>" class="">

                                    <div class="informer informer-default">Home</div>
                                    <div class="informer informer-default dir-br"><span class="md md-home"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="<?=base_url().$this->uri->segment(1).'/admin_pages'?>" class="">

                                    <div class="informer informer-default">Pages</div>
                                    <div class="informer informer-default dir-br"><span class="md md-content-paste"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="#" class="">

                                    <div class="informer informer-default">Partners</div>
                                    <div class="informer informer-default dir-br"><span class="md md-link"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="<?=base_url().$this->uri->segment(1).'/admin_settings'?>" class="">

                                    <div class="informer informer-default">Settings</div>
                                    <div class="informer informer-default dir-br"><span class="md md-settings"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="#" class="">

                                    <div class="informer informer-default">Reports</div>
                                    <div class="informer informer-default dir-br"><span class="md md-report"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>



                    <div class="col-md-3">
                        <div class="card">

                            <div class="card-body text-default-light">
                                <a href="#" class="">

                                    <div class="informer informer-default">Mail</div>
                                    <div class="informer informer-default dir-br"><span class="md md-report"></span></div>
                                </a>
                            </div><!--end .card-body -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

