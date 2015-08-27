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


    ?>
    <div style="margin-left: 10px;">
        <div class="form-group file_url">

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

        <div class="form-group">

            <div class="col-md-10">
                <input type="submit" name="upload" class="btn btn-primary register" value="Upload"> <a
                    class="btn btn-info" href="<?= current_url() ?>"><i class="fa fa-refresh"></i></a>
            </div>
        </div>
    </div>


    </form>
</div>