<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/30/14
 * Time: 10:51 AM
 */
?>

    <?php
    //if there are any errors
    if(isset($errors))
    {
        echo error_template($errors);

    }

    //if it a success
    elseif(isset($success))
    {
        echo success_template('Email was sent');

    }
    $attributes = array
    (
        'class' => 'form-horizontal',
        'id' => 'myform'
    );

    echo form_open(current_url(), $attributes);
    ?>


        <div class="form-group">
            <label for="prf_name" class="col-sm-3 control-label">To</label>
            <div class="col-sm-6">
                <input type="email" name="to" required="required" class="form-control" id="to"
                       placeholder="Recipient email here...">
            </div>
        </div>


        <div class="form-group">
            <label for="prf_name"  class="col-sm-3 control-label">Subject</label>
            <div class="col-sm-6">
                <input  type="text"  name="subject"  class="form-control" id="subject" placeholder="Subject here...">
            </div>
        </div>

        <input  type="hidden"name="from" value="<?=$this->config->item('site_email')?>"   class="form-control" id="from" placeholder="">



        <div class="form-group">
            <label class="col-sm-3 control-label">Message</label>
            <div class="col-sm-9">
                <textarea  name="content"  id="content" class="form-control ckeditor message2" >

                </textarea>

                <script>
                    CKEDITOR.replace( 'descrip',
                        {
                            filebrowserBrowseUrl : '<?=base_url()?>js/ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl : '<?=base_url()?>js/ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl : '<?=base_url()?>js/ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl : '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl : '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl : '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Flash'
                        });
                </script>

            </div>
        </div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-9">
        <div class="panel-footer">
            <input type="submit" class="btn btn-primary" id="send" name="send" value="Send"/>
        </div>
    </div>
</div>



    </form>
    <div class="message">
    </div>


<script>
    $(document).ready(function(){
        $('#selector1').select2();
        $('#tokens-example').tokenfield();
    });



    $('#send').click(function(){

        //loading gif
        $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }


        var to              =$('#to').val();
        var subject         =$('#subject').val();
        var description     =jQuery("textarea.message2").val();

        var form_data =
        {
            to :                to,
            subject :           subject,
            description:        description,
            ajax:               'send_mail'
        };

        $.ajax({
            url: "<?php echo site_url('admin/'.$this->uri->segment(2).'/new_mail') ?>",
            type: 'POST',
            data: form_data,
            success: function(msg) {

                $('.message').html(msg);

            }
        });


        return false;

    });
</script>