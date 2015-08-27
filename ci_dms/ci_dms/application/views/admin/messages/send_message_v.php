<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 4/10/2015
 * Time: 8:36 PM
 */
?>
<div id="recent_msg"></div>


<?= $this->load->view('admin/messages/forms/send_msg_f') ?>
<script type="text/javascript">
    $(document).ready(function () {
        //alert('foo');
        var auto_refresh = setInterval(
            function () {
                var reciepient = '<?=decryptValue($this->uri->segment(4))?>';
                var form_data =
                {

                    reciepient: reciepient,
                    ajax: 'get_nw_msg'
                };

                $.ajax({
                    url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                    type: 'POST',
                    data: form_data,
                    success: function (msg) {

                        $('#recent_msg').html(msg);

                    }
                });

            }, 1000); // refresh every 10000 milliseconds

    });


</script>