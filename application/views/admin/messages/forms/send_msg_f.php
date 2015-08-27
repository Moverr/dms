<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 4/10/2015
 * Time: 8:46 PM
 */
?>
<div class="message">

</div>
<div class="panel panel-default push-up-10">
    <div class="panel-body panel-body-search">
        <div class="input-group">

            <input id="my_nw_message" type="text" class="form-control" placeholder="Your message...">

            <div class="input-group-btn">
                <button class="btn btn-default send_msg">Send</button>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('.send_msg').click(function () {

            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            var nw_msg = $('#my_nw_message').val();
            var reciepient = '<?=decryptValue($this->uri->segment(4))?>';


            var form_data =
            {
                nw_msg: nw_msg,
                reciepient: reciepient,
                ajax: 'send_nw_msg'
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

    });
</script>