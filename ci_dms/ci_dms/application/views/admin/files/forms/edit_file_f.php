<div class="block">

    <?php
    $attributes =
        array
        (
            'class' => 'form-horizontal row-border',
            'name' => 'fileinfo'
        );
    if (isset($errors)) {
        echo error_template($errors);
    }
    if (isset($success)) {
        echo success_template($success);
    }
    echo form_open_multipart(current_url(), $attributes);

    //print_array($file_info);
    //print_array(get_active_file_types());
    foreach ($file_info as $file) {
        $type = $file['file_type'];
        $category = $file['file_category'];
        $file_url = $file['fileurl'];
        $access = $file['access_type'];
        $description = $file['description'];
        $title = $file['title'];
        $author = $file['author'];
    }
    //echo $type;
    //echo $id;

    //print_array(get_file_info_by_id($id,''));


    //switch by file type
    //accepted types
    $accepted = array('1', '3');//1=>images 3=>other
    if (in_array($type, $accepted)) {
        //switch depending on type
        switch ($type) {
            //case of images
            case 1:
                ?>

                <div style="margin-left: 30%;" class="gallery" id="links">

                    <a class="gallery-item" href="<?= base_url() ?>uploads/files/<?= get_thumbnail($file_url) ?>"
                       title="<?= $title ?>" data-gallery="">
                        <div class="image">
                            <img src="<?= base_url() ?>uploads/files/<?= get_thumbnail($file_url) ?>"
                                 alt="Nature Image 1">

                        </div>

                    </a>

                </div>
                <?php
                break;

            //case of documents
            case 3:
                ?>
                <div style="margin-left: 30%;margin-bottom: 10px;" class="btn btn-large btn-info"><i
                        class="fa fa-file fa-3x"></i> <a
                        href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/download/' . $file_url ?>"><?= $title ?></a>
                </div>
                <?php
                break;
        }

    }


    ?>




    <input type="hidden" name="user_id" value="<?= $author ?>" class="form-control" id="user_id">

    <input type="hidden" name="file_id" value="<?= $id ?>" class="form-control" id="file_id">

    <div class="form-group">
        <label class="col-md-2 control-label">Title</label>

        <div class="col-md-8">
            <input required="" type="text" name="title" class="form-control" value="<?= $title ?>"/>
        </div>
    </div>
    <div class="form-group">

        <label class="col-md-2 control-label">File type</label>

        <div class="col-md-8">
            <select id="file_type" name="file_type" class="form-control select" data-style="btn-default">
                <option selected class="text-info"
                        value="<?= $type ?>"> <?= get_file_type_info_by_id($type, 'title') ?></option>
                <?php
                foreach (get_active_file_types() as $type) {
                    ?>
                    <option value="<?= $type['id'] ?>"> <?= $type['title'] ?></option>
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
                <option selected class="text-info"
                        value="<?= $category ?>"> <?= get_file_category_info_by_id($category, 'title') ?></option>
                <?php
                foreach (get_active_file_categories() as $category) {
                    ?>
                    <option value="<?= $category['id'] ?>"><?= $category['title'] ?></option>
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
                <option selected class="text-info"
                        value="<?= $access ?>"> <?= $access == 'r' ? 'Only Registered users' : 'Everyone' ?> </option>
                <option value="p"> Everyone</option>
                <option value="r"> Only Registered users</option>


            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Description</label>

        <div class="col-md-8">
            <textarea name="description" class="form-control"><?= html_entity_decode($description) ?></textarea>
        </div>
    </div>


    <div class="form-group file_url">
        <label class="col-md-2 control-label"></label>

        <div class="col-md-10">

            <?php



            $data = array
            (
                'name' => 'userfile',
                'id' => 'userfile',
                'value' => set_value('userfile'),
                'maxlength' => '',
                'size' => '',
                'style' => '',
                'class' => 'fileinput btn-info',
                'data-filename-placement' => 'inside',
                'title' => 'Select file'
            );

            echo form_upload($data);

            ?>
        </div>
    </div>

    <div class="form-group video_url">
        <label class="col-md-2 control-label">Video youtube URL</label>

        <div class="col-md-8">
            <input type="text" name="file_url" class="form-control" value="<?= $file_url ?>"/>
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
    $(document).ready(function () {
        //default state for upload field
        if ($('#file_type').val() == 1 || $('#file_type').val() == 3) {
            $('.file_url').show('slow');
        }
        else {
            //if it is videos hide
            $('.file_url').hide('slow');
        }

        //default state for video url field
        if ($('#file_type').val() == 2) {
            $('.video_url').show('slow');
        }
        else {
            //if it is videos hide
            $('.video_url').hide('slow');
        }

        //if file type is chosen
        $('#file_type').change(function () {

            //if it is image or other
            if ($('#file_type').val() == 1 || $('#file_type').val() == 3) {
                $('.file_url').show('slow');
            }
            else {
                //if it is videos hide
                $('.file_url').hide('slow');
            }

            //case of videos
            //if it is image or other
            if ($('#file_type').val() == 2) {
                $('.video_url').show('slow');
            }
            else {
                //if it is videos hide
                $('.video_url').hide('slow');
            }

        });
    });


</script>

