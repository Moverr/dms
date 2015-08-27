<div style="margin-bottom: 10px;" id="contact_msg">

</div>

<form class="form" role="form">
    <div class="form-group">
        <input value="<?= get_site_info('site_name') ?>" type="text" class="form-control input-lg" id="site_name"
               required data-rule-minlength="2" placeholder="">
        <label for="large3">Site name</label>
    </div>
    <div class="form-group ">
        <input value="<?= get_site_info('email') ?>" type="email" class="form-control input-lg" id="site_email" required
               placeholder="">
        <label for="default3">Site email</label>
    </div>
    <div class="form-group">
        <input value="<?= get_site_info('address') ?>" type="text" class="form-control input-lg" id="site_address"
               placeholder="">
        <label for="small3">Site Address</label>
    </div>
    <div class="form-group">
        <input value="<?= get_site_info('map') ?>" type="text" class="form-control input-lg" id="site_map"
               placeholder="">
        <label for="small3">Google Maps</label>
    </div>
    <div class="form-group">
        <input value="<?= get_site_info('tel') ?>" type="text" class="form-control input-lg" id="site_tel"
               placeholder="">
        <label for="small3">Telephone</label>
    </div>
    <div class="form-group">
        <input value="<?= get_site_info('fax') ?>" type="text" class="form-control input-lg" id="site_fax"
               placeholder="">
        <label for="small3">Fax</label>
    </div>

    <button type="button" id="save_contact_info" class="btn ink-reaction btn-raised btn-primary">Save</button>
</form>


<script>
    $(document).ready(function () {
        $('#save_contact_info').click(function () {

            $('#contact_msg').html('<img src="<?=base_url()?>images/ajax-loader.gif">');
            var site_name = $('#site_name').val();
            var site_email = $('#site_email').val();
            var site_address = $('#site_address').val();
            var site_map = $('#site_map').val();
            var site_fax = $('#site_fax').val();
            var site_tel = $('#site_tel').val();

            var form_data =
            {
                site_name: site_name,
                site_email: site_email,
                site_address: site_address,
                site_map: site_map,
                site_fax: site_fax,
                site_tel: site_tel,
                ajax: 'save_contact_info'
            }

            $.ajax({
                uri: '<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>',
                type: 'POST',
                data: form_data,
                success: function (msg) {
                    $('#contact_msg').html(msg);
                }
            });

            return false;

        });
    });
</script>