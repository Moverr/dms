<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/14
 * Time: 1:27 PM
 * registration form
 */
//print_array($user_info);
foreach($user_info as $row)
{
    $fname      =$row['fname'];
    $lname   =$row['lname'];
    $id         =$row['id'];

    //print_array(get_user_info_by_id($id,'telephone'));
}
?>
<div class="block">
    <h4>Update User info</h4>
    <form class="form-horizontal" method="post" role="form" action="#">

        <div class="form-group">
            <input required=""  type="text" class="form-control fname" value="<?=ucwords($fname)?>" placeholder="First name">
        </div>
        <div class="form-group">
            <input required=""  type="text" class="form-control lname" value="<?=ucwords($lname)?>"" placeholder="Last name">
        </div>




        <div class="form-group">
            <input type="submit" class="btn btn-primary register" value="Edit account">
        </div>

        <div class="message">

        </div>


    </form>
</div>



<script>

    $(document).ready(function()
    {

        $('#selector1').select2();
        $('.populate').select2();
        $('.datepicker').datepicker();


    });

    $('.register').click(function(){

        //loading gif
        $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }



        var fname           =$('.fname').val();
        var lname           =$('.lname').val();

        var id              ='<?=$id?>';

        var form_data =
        {

            fname :     fname,
            lname:      lname,

            id:         id,
            ajax:       'update_additional'
        };

        $.ajax({
            url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
            type: 'POST',
            data: form_data,
            success: function(msg)
            {

                $('.message').html(msg);

            }
        });

        return false;

    });
</script>