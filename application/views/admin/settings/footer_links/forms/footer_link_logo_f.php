<?php
/*
#Author: Cengkuru Micheal
9/23/14
2:54 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<div class="block">
    <?php

    $attributes =
        array
        (
            'class' => 'form-horizontal row-border',
            'name'  =>'fileinfo'
        );
    echo form_open_multipart(current_url(),$attributes);

    //if there are errors
    if(isset($errors))
    {
        echo error_template($errors);
    }

    if(isset($success))
    {
        echo success_template($success);
    }
    ?>


    <input type="hidden" name="id" value="<?= $id ?>" class="form-control" id="user_id">





    <div class="form-group">

        <div class="col-sm-9">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    <?php
                    //if there is an image
                    if (get_footer_link_info_by_id($id, 'image'))
                    {
                        ?>
                        <img
                            src="<?= base_url() . 'uploads/footer_link_logos/' . get_thumbnail(get_footer_link_info_by_id($id, 'image')) ?>">
                    <?php
                    }
                    ?>

                </div>
                <div>

                    <?php
                    $data = array
                    (
                        'name'        => 'userfile',
                        'id'          => 'userfile',
                        'value'       => set_value('userfile'),
                        'maxlength'   => '',
                        'size'        => '',
                        'style'       => '',
                        'class'       => 'fileinput btn-info',
                        'data-filename-placement'   =>'inside',
                        'title'                     =>'New filename goes inside'
                    );

                    echo form_upload($data);

                    ?>

                </div>
            </div>
        </div>
    </div>

    <input type="submit" class="btn btn-primary " id="upload" name="upload" value="Upload Image" />


    </form>
</div>
