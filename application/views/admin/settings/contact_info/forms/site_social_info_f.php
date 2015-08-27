<div style="margin-bottom: 10px;" id="social_msg">

</div>
<form class="form" role="form">
    <div class="form-group">
        <input value="<?= get_site_info('facebook') ?>" type="text" class="form-control input-lg" id="social_facebook"
               placeholder="">
        <label for="large3">Facebook</label>
    </div>
    <div class="form-group">
        <input value="<?= get_site_info('twitter') ?>" type="text" class="form-control input-lg" id="social_twitter"
               placeholder="">
        <label for="default3">Twitter</label>
    </div>
    <div class="form-group">
        <input value="<?= get_site_info('google_plus') ?>" type="text" class="form-control input-lg" id="social_google"
               placeholder="">
        <label for="small3">Google Plus</label>
    </div>

    <div class="form-group">
        <input value="<?= get_site_info('youtube') ?>" type="text" class="form-control input-lg" id="social_youtube"
               placeholder="">
        <label for="small3">Youtube</label>
    </div>

    <button id="save_social_info" type="button" class="btn ink-reaction btn-raised btn-primary">Save</button>
</form>

<script>
    $(document).ready(function () {
        $('#save_social_info').click(function () {

            $('#social_msg').html('<img src="<?=base_url()?>images/ajax-loader.gif">');
            var site_facebook = $('#social_facebook').val();
            var site_google = $('#social_google').val();
            var site_youtube = $('#social_youtube').val();
            var site_twitter = $('#social_twitter').val();

            var form_data =
            {
                site_facebook: site_facebook,
                site_google: site_google,
                site_youtube: site_youtube,
                site_twitter: site_twitter,
                ajax: 'save_social_info'
            }

            $.ajax({
                uri: '<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>',
                type: 'POST',
                data: form_data,
                success: function (msg) {
                    $('#social_msg').html(msg);
                }
            });

            return false;

        });
    });
</script>
 