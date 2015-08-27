<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 11/2/14
 * Time: 9:59 AM
 */
foreach($user_info as $info)
{
    $slug=$info['slug'];
    $fname=$info['fname'];
    $lname=$info['lname'];
    $id=$info['id'];
}
?>


            <div class="panel panel-default">
                <div class="panel-body profile bg-primary">

                    <div class="profile-image">
                        <img  src="<?=base_url()?>uploads/avatars/<?=get_thumbnail(get_user_info_by_id($id,'avatar'))?>" alt="<?=get_user_info_by_id($id,'fullname')?>" />
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name"><?=get_user_info_by_id($id,'firstname')?></div>
                        <div class="profile-data-title"><?=get_user_info_by_id($id,'usertype')?></div>
                    </div>


                </div>
                <div class="panel-body ">
                    <?php
                        //print_array(get_user_info_by_id($id,''))
                    ?>
                    <div class="panel-body ">

                        <form action="#" role="form" class="form-horizontal col-md-6" >
                            <legend>Basic info</legend>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-left">First name</label>
                                <div style="margin-top: 10px"  class="col-md-8 ">
                                    <div class="text-right"><?=get_user_info_by_id($id,'firstname')?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label text-left">last name</label>
                                <div style="margin-top: 10px"  class="col-md-8 ">
                                    <div class="text-right"><?=get_user_info_by_id($id,'lastname')?></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label text-left">Email</label>
                                <div style="margin-top: 10px"  class="col-md-8 ">
                                    <div class="text-right"><?=get_user_info_by_id($id,'email')?></div>
                                </div>
                            </div>



                        </form>

                        <form action="#" role="form" class="form-horizontal  col-md-6" >
                            <legend>Additional info</legend>
                            <div class="form-group">
                        <label class="col-md-4 control-label text-left">Tel</label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'telephone') == '' ? '' : get_user_info_by_id($id, 'telephone') ?></div>
                        </div>

                        <label class="col-md-4 control-label text-left">City</label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'city') == '' ? '' : get_user_info_by_id($id, 'city') ?></div>
                        </div>

                        <label class="col-md-4 control-label text-left">Address</label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'address') == '' ? '' : get_user_info_by_id($id, 'address') ?></div>
                        </div>

                        <label class="col-md-4 control-label text-left">Country</label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'country') == '' ? '' : get_country_by_id(get_user_info_by_id($id, 'country')) ?> </div>
                        </div>



                        <label class="col-md-4 control-label text-left">Date of birth</label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'd_o_b') == '' ? '' : substr(get_user_info_by_id($id, 'd_o_b'), 0, 10) ?></div>
                        </div>

                        <label class="col-md-4 control-label text-left"><i class="fa fa-facebook"></i></label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'facebook') == '' ? '' : get_user_info_by_id($id, 'facebook') ?></div>
                        </div>

                        <label class="col-md-4 control-label text-left"><i class="fa fa-twitter"></i></label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'twitter') == '' ? '' : get_user_info_by_id($id, 'twitter') ?></div>
                        </div>

                        <label class="col-md-4 control-label text-left"><i class="fa fa-google-plus"></i></label>
                        <div style="margin-top: 10px" class="col-md-8 ">
                            <div
                                class="text-right"><?= get_user_info_by_id($id, 'google_plus') == '' ? '' : get_user_info_by_id($id, 'google_plus') ?></div>
                        </div>

                    </div>

                    </form>


                </div>


                <div class="panel panel-info">
                    <div class="panel-heading ui-draggable-handle">
                        <h3 class="panel-title">Bio</h3>
                    </div>
                    <div class="panel-body">


                        <?= get_user_info_by_id($id, 'bio') ?>

                    </div>

                </div>

                    <div class="panel panel-info">
                        <div class="panel-heading ui-draggable-handle">
                            <h3 class="panel-title">Location</h3>
                        </div>
                        <div class="panel-body">

                            <?= get_user_location($id) ?>

                        </div>

                    </div>


                </div>






    </div>




