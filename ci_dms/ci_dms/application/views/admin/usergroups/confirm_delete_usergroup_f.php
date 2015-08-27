<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/27/14
 * Time: 10:24 AM
 */
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
        <p><a class="btn btn-danger delete_usertype" href="#">Delete</a></p>

        <p>

        <div class="conf_bdy">

        </div>
    </div>
</div>

<script>
    $('.delete_usertype').click(function () {
        //get data values

        var group_id = '<?=$group_id?>';

        var action_data =
        {
            usertype_id: group_id,
            ajax: 'form_delete_usertype'
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
                        window.open("<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>", "_self");

                    }
                    count--;
                }, 500);

            }
        });

        return false;


    });
</script>