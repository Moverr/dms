<?php
foreach ($logo_info as $row) {

    $img_width = $row['width'];
    $img_height = $row['height'];
}
?>

<div id="dimension_msg">

</div>
<form class="form" role="form">
    <div class="form-group ">
        <input value="<?= $img_width ?>" type="text" class="form-control input-lg" id="l_width">
        <label for="help2">Width (px)</label>

        <p class="help-block">Enter a number</p>
    </div>

    <div class="form-group ">
        <input value="<?= $img_height ?>" type="text" class="form-control input-lg" id="logo_height">
        <label for="help2">Height (px)</label>

        <p class="help-block">Enter number</p>
    </div>

    <button id="save_logo_dimensions" type="button" class="btn ink-reaction btn-raised btn-primary">Save</button>

</form>
<script>
    $(document).ready(function () {
        $('#save_logo_dimensions').click(function () {
            $('#dimension_msg').html('<img src="<?=base_url()?>images/ajax-loader.gif">');

            var logo_width = $('#l_width').val();
            var logo_height = $('#logo_height').val();

            //(logo_width)

            var form_data =
            {
                logo_width: logo_width,
                logo_height: logo_height,
                ajax: 'logo_dimensions'
            }
            $.ajax({
                url: '<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>',
                type: 'POST',
                data: form_data,
                success: function (msg) {
                    $('#dimension_msg').html(msg);
                }
            });

            return false;
        });
    });
</script>