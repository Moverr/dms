<?php
/*
#Author: Cengkuru Micheal
8/21/14
3:53 PM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<div class="block">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="usertype" class="col-sm-3 control-label">Category name</label>

            <div class="col-sm-6">
                <input type="text" class="form-control" id="category" placeholder="category...">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                    <button id="create" class="btn-primary btn ">Submit</button>
                    <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) ?>"
                       class="btn-default btn">Cancel</a>
                </div>
            </div>
        </div>

    </form>
    <p>

    <div class="message">

    </div>
    </p>

</div>

<script>
    $(document).ready(function () {
        $(".populate").select2();

        $('#create').click(function () {


            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

            var category = $('#category').val();


            var form_data =
            {
                category: category,

                ajax: 'add_category_f'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3))?>",
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

 