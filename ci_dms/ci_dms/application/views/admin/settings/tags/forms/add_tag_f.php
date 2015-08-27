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
            <label for="usertype" class="col-sm-3 control-label">Tag</label>

            <div class="col-sm-6">
                <input type="text" class="form-control" id="tag" placeholder="tag...">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                    <button id="create" class="btn-primary btn ">Submit</button>
                    <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/tags' ?>"
                       class="btn-default btn">Cancel</a>
                </div>
            </div>
        </div>

    </form>

    <div style="margin-top: 10px;" class="message">

    </div>

</div>


<script>
    $(document).ready(function () {
        $(".populate").select2();
        $('#create').click(function () {


            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

            var tag = $('#tag').val();


            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: {
                    tag_id: tag,
                    ajax: 'add_tag_f'
                },
                success: function (msg) {

                    $('.message').html(msg);

                }
            });
            return false;

        });
    });

</script>

 