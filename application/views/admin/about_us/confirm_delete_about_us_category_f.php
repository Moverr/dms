<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/27/14
 * Time: 10:24 AM
 */
//echo $passed_id;
?>

<div class="conf_bdy">

</div>

<div class="card">
    <div class="card-body style-danger height-1"></div>
    <div class="card-body small-padding text-center">
        <h3>
            Warning!
        </h3>
        <p>Are you sure about deleting this?</p>
        <br>
        <p><a class="btn btn-danger delete_" href="<?=$passed_id?>">Delete </a></p>
    </div>
</div>

<script>
    $('.delete_').click(function () {
        //get data values

        var passed_id = '<?=$passed_id?>';

        //alert(profile_id);


        var action_data =
        {
            passed_id: passed_id,
            ajax: 'form_delete_about_us_category'
        };
        //loading gif
        $(".conf_bdy").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

        $.ajax({
            url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
            type: 'POST',
            data: action_data,
            success: function (msg) {

                $('.conf_bdy').html(msg);

                var count = 1;
                var countdown = setInterval(function () {
                    $("countdown").html(count + " seconds remaining!");
                    if (count == 0) {
                        clearInterval(countdown);
                        window.open("<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>/about_us_categories", "_self");

                    }
                    count--;
                }, 500);

            }
        });

        return false;


    });
</script>