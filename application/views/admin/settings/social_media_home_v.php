


<div class="card card-underline">
    <div class="card-head">
        <header><?=$pagetitle?></header>

    </div>
    <!--end .card-head -->
    <div class="card-body">
        <div style="margin-top: 20px">
            <!-- TAB NAVIGATION -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Social Media links</a></li>
                <li><a href="#tab2" role="tab" data-toggle="tab">Add New</a></li>
            </ul>
            <!-- TAB CONTENT -->
            <div class="tab-content">
                <div class="active tab-pane fade in" id="tab1">

                    <div class="table-responsive">
                        <table class="table no-margin table-stripped">
                            <thead>
                            <tr>

                                <th>Social Media</th>
                                <th>URL</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>
                                    <div class="btn-group pull-right">

                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php
                                            if(check_my_access('permission_code')){
                                                ?>
                                                <li><a href="#">Edit</a></li>
                                            <?php
                                            }

                                            if(check_my_access('permission_code')){
                                                ?>
                                                <li><a href="#" >Delete</a></li>
                                            <?php
                                            }
                                            ?>




                                        </ul>
                                    </div>

                                    <i class="fa fa-twitter"></i> Twitter </td>
                                <td>www.twitter.com/dms</td>

                            </tr>
                            <tr>

                                <td>
                                    <div class="btn-group pull-right">

                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php
                                            if(check_my_access('permission_code')){
                                                ?>
                                                <li><a href="#">Edit</a></li>
                                            <?php
                                            }

                                            if(check_my_access('permission_code')){
                                                ?>
                                                <li><a href="#" >Delete</a></li>
                                            <?php
                                            }
                                            ?>




                                        </ul>
                                    </div>
                                    <i class="fa fa-youtube"></i> Youtube </td>
                                <td>www.youtube.com/dms</td>

                            </tr>

                            <tr>

                                <td>
                                    <div class="btn-group pull-right">

                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php
                                            if(check_my_access('permission_code')){
                                                ?>
                                                <li><a href="#">Edit</a></li>
                                            <?php
                                            }

                                            if(check_my_access('permission_code')){
                                                ?>
                                                <li><a href="#" >Delete</a></li>
                                            <?php
                                            }
                                            ?>




                                        </ul>
                                    </div>
                                    <i class="fa fa-facebook"></i> Facebook </td>
                                <td>www.youtube.com/dms</td>

                            </tr>


                            </tbody>
                        </table>
                    </div>




                </div>
                <div class="tab-pane fade" id="tab2">
                    <?=$this->load->view('admin/settings/forms/social_media_f')?>
                </div>

            </div>
        </div>
    </div>


</div><!--end .card-body -->
