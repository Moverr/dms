<?php
/*
#Author: Cengkuru Micheal
9/16/14
3:21 PM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');


?>
<div class="form_area">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="usertype" class="col-sm-3 control-label">Usertype</label>

            <div class="col-sm-6">
                <input type="text" required=""
                       value="<?= get_usertype_by_type_id(decryptValue($this->uri->segment(4)), 'title') ?>"
                       class="form-control" id="usertype" placeholder="usertype...">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                    <button id="edit" class="btn-primary btn ">Submit</button>
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

        $('#edit').click(function () {


            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Please wait...');

            var usertype = $('#usertype').val();

            var form_data =
            {
                usertype: usertype,
                'id': '<?=decryptValue($this->uri->segment(4))?>',
                ajax: 'form_edit'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/edit') ?>",
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