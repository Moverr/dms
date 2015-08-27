<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 4/10/2015
 * Time: 8:42 PM
 */
?>
<form class="form-horizontal">
    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="fa fa-search"></span>
                </div>
                <input type="text" id="find_usr" class="form-control" placeholder="Who are you looking for?">

            </div>
        </div>

    </div>
</form>

<script>
    $(document).ready(function () {
        $('#find_usr').keyup(function () {
            //alert('foo');
            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            var user = $('#find_usr').val();

            var form_data =
            {
                user: user,
                ajax: 'find_user'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.message').html(msg);

                }
            });

            return false;
        });
    })
</script>