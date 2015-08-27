<?php
/*
#Author: Cengkuru Micheal
9/23/14
2:54 PM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');

//print_array(get_blog_category_info_by_id($id,'title'));


$attributes =
    array
    (
        'class' => 'form-horizontal row-border',
        'name' => 'fileinfo'
    );
//echo form_open_multipart(current_url(),$attributes);


?>


<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Title</label>

    <div class="col-sm-6">
        <input type="text" name="title" value="<?= get_about_us_category_info_by_id($id, 'title') ?>"
               class="form-control" id="title" placeholder="category title here">
    </div>
</div>

<div class="row">
    <div class="form-group">
        <div style="margin-top: 20px;" class="col-sm-6 col-sm-offset-3">
            <div class="btn-toolbar">

                <input type="submit" class="btn btn-primary " id="upload" name="submit" value="submit"/>

                <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/about_us_categories' ?>"
                   class="btn-default btn">Cancel</a>
            </div>
        </div>
    </div>
</div>

<div class="message">

</div>


</form>


<script>

    $(document).ready(function () {

        $('#selector1').select2();
        $('.populate').select2();
        $('.datepicker').datepicker();


        $('#upload').click(function () {

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            var title = $('#title').val();

            var form_data =
            {
                title: title,
                id: '<?=$id?>',
                ajax: 'edit_about_us_category'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.message').html(msg);

                }
            });

            return false;

        });


    });


</script>

