<?php
//print_array(get_profile_info());
?>
<?php
$form_atr = array
(

    'class' => 'form-horizontal row-border'
);
echo form_open(current_url(), $form_atr);
?>

<div class="form-group">
    <label class="col-sm-3 control-label">Content</label>

    <div class="col-sm-9">
        <textarea name="content" id="content" class="form-control ckeditor message2">

        </textarea>

        <script>
            CKEDITOR.replace('descrip',
                {
                    filebrowserBrowseUrl: '<?=base_url()?>js/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '<?=base_url()?>js/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '<?=base_url()?>js/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '<?=base_url()?>js/ckfinder/core/connector/java/connector.java?command=QuickUpload&type=Flash'
                });
        </script>

    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-9">

        <input type="submit" class="btn btn-primary" id="create" name="create" value="create"/>
        <a class="btn btn-default "
           href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/policy' ?>">Cancel</a>


    </div>
</div>


</form>
<div class="message">
</div>

<script>
    $(document).ready(function () {
        $('.populate').select2({
            placeholder: "Select destinations",
            allowClear: true
        });

        $('#create').click(function () {

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            //var locations        =$('#e2').val();
            var content = jQuery("textarea.message2").val();
            //alert($('#e2').val());

            var form_data =
            {
                content: content,
                ajax: 'add_policy_f'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.message').html(msg);
                    $('#create').hide();

                }
            });


            return false;

        });
    });
</script>


