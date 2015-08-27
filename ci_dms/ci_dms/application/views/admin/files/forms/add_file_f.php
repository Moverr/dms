<div class="block">

    <?php
    $attributes =
        array
        (
            'class' => 'form-horizontal row-border',
            'name'  =>'fileinfo'
        );
    if (isset($errors)) {
        echo error_template($errors);
    }
    if (isset($success)) {
        echo success_template($success);
    }
    echo form_open_multipart(current_url(),$attributes);


    ?>


    <input  type="hidden"  name="user_id" value="<?=logged_in_user('id')?>" class="form-control" id="user_id" >

    <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-8">
                <input type="text" name="title" class="form-control" value="<?= set_value('title') ?>"/>
            </div>
        </div>
        <div class="form-group">

            <label class="col-md-2 control-label">File type</label>
            <div class="col-md-8">
                <select id="file_type" name="file_type" class="form-control select" data-style="btn-default">
                    <?php
                    foreach(get_active_file_types() as $type)
                    {
                        ?>
                        <option <?= $type['id'] == 1 ? 'selected' : '' ?>
                            value="<?= $type['id'] ?>"> <?= $type['title'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">File category</label>
            <div class="col-md-8">
                <select class="form-control select" name="file_category" data-live-search="true">
                    <option selected value="">Choose category</option>
                    <?php

                    foreach(get_active_file_categories() as $category)
                    {
                        ?>
                        <option value="<?=$category['id']?>"><?=$category['title']?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Access type</label>
            <div class="col-md-8">
                <select id="access_type" name="access_type" class="form-control select" data-style="btn-default">
                    <option value="p"> Everyone </option>
                    <option value="r"> Only Registered users </option>


                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-md-8">
                <textarea name="description" class="form-control"><?=set_value('description')?></textarea>
            </div>
        </div>




        <div  class="form-group file_url">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
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
                    'title'                     =>'Select file'
                );

                echo form_upload($data);

                ?>
            </div>
        </div>

        <div  class="form-group video_url">
            <label class="col-md-2 control-label">Video youtube URL</label>
            <div class="col-md-8">
                <input type="text" name="file_url" class="form-control" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-10">
                <input type="submit" name="upload" class="btn btn-primary register" value="Submit">
            </div>
        </div>


    </form>
</div>

<script>
    $(document).ready(function()
    {
        //default state for upload field
        if($('#file_type').val()==1||$('#file_type').val()==3)
        {
            $('.file_url').show('slow');
        }
        else
        {
            //if it is videos hide
            $('.file_url').hide('slow');
        }

        //default state for video url field
        if($('#file_type').val()==2)
        {
            $('.video_url').show('slow');
        }
        else
        {
            //if it is videos hide
            $('.video_url').hide('slow');
        }

        //if file type is chosen
        $('#file_type').change(function(){

            //if it is image or other
            if($('#file_type').val()==1||$('#file_type').val()==3)
            {
                $('.file_url').show('slow');
            }
            else
            {
                //if it is videos hide
                $('.file_url').hide('slow');
            }

            //case of videos
            //if it is image or other
            if($('#file_type').val()==2)
            {
                $('.video_url').show('slow');
            }
            else
            {
                //if it is videos hide
                $('.video_url').hide('slow');
            }

        });
    });
</script>