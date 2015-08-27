<form class="form-horizontal" method="post" role="form" action="#">

    <div class="form-group">
        <label class="col-md-2 control-label">Subject</label>

        <div class="col-md-10">
            <input type="text" id="subject" class="form-control" placeholder="Email subject" value="">
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-2 control-label">Message</label>

        <div class="col-md-10">
            <textarea id="message" maxlength="165" class="form-control" rows="5"></textarea>
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-2 control-label"></label>

        <div class="col-md-10">
            <div class="form-group">
                <input type="submit" class="btn btn-primary email" value="Send email">
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


    });

    $('.email').click(function () {

        //loading gif
        $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


        var subject = $('#subject').val();
        var message = $('#message').val();

        var form_data =
        {

            subject: subject,
            message: message,
            email: '<?=get_user_info_by_id($id,'email')?>',
            ajax: 'send_email_f'
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
</script>