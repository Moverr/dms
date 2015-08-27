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
    $email      =$row['email'];
    $usertype   =$row['usertype'];
    $id         =$row['id'];
}
?>
<div class="block">

   <form class="form-horizontal" role="form">

        <div class="form-group">
            <select id="usertype" class="selectpicker" data-live-search="true" title="Please select a user group">
                <option class="text-info" selected="" value="<?=$usertype?>"><?=ucwords(get_usertype($usertype,'title'))?></option>
                <?php
                if (check_my_access('add_user')) {
                    $usertypes = get_active_usertypes();
                    foreach ($usertypes as $type) {
                        //do nothing
                        ?>
                        <option value=""><?= ucwords($type['usertype']) ?></option>
                    <?php
                    }
                }

                ?>
            </select>
        </div>

        <div class="form-group">
            <input  type="email"  value="<?=$email?>" class="form-control email" placeholder="Email">
        </div>
        <div class="form-group">
            <input  type="password" class="form-control password" placeholder="Password">
        </div>
        <div class="form-group">
            <input  type="password" class="form-control cpassword" placeholder="Re-enter password">
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

        $('.selectpicker').selectpicker();


    });







    $('.register').click(function(){

        //loading gif
        $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');
        var email           =$('.email').val();
        var usertype        =$('#usertype').val();
        var password        =$('.password').val();
        var cpassword       =$('.cpassword').val();
        var id              ='<?=$id?>';

        var form_data =
        {

            email :      email,
            usertype:    usertype,
            password:    password,
            cpassword:   cpassword,
            id:          id,
            ajax:        'update_account'
        };
        //alert('foo');

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