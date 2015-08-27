<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/9/14
 * Time: 7:46 PM
 */
?>



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
            echo success_template('<p>Reply was successfully sent</p>');

        }
        ?>


        <div class="form-group">

            <div class="col-sm-12">
                Message<br>

                <textarea   name="content" id="usr_msg" class="form-control ckeditor message2" ></textarea>


            </div>
        </div>

        <div class="form-group">
            <label for="ticket-attachment" class="col-sm-3 control-label">Attachment</label>
            <div class="col-md-9">

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
                <p class="help-block"><em>Valid file type: .csv, .xls, .xlsx., .doc,.docx, .jpg, .png, .gif, .jpeg </em></p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-7">
                <input type="submit" class="btn btn-send send" id="reply" name="reply" value="<?=$this->session->userdata('edit')?'Edit Post':'Send'?>" />

            </div>
        </div>

        </form>


<script>
    $(document).ready(function(){
        CKEDITOR.replace( 'usr_msg',
            {
                filebrowserBrowseUrl : '<?=base_url()?>js/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl : '<?=base_url()?>js/ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl : '<?=base_url()?>js/ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl : '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl : '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl : '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Flash'
            });
    });

</script>

