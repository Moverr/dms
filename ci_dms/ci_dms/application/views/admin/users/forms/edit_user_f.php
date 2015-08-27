<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/14
 * Time: 1:27 PM
 * registration form
 */

foreach($user_info as $info)
{
    $id         =$info['id'];
    $fname      =$info['fname'];
    $lname      =$info['lname'];
    $email      =$info['email'];
    $usr_type   =$info['usertype'];

}

?>

<div class="block">
    <form class="form-horizontal" method="post" name="registerform" action="#">
        <div class="form-group">
            <input required="" type="text" class="form-control fname"
                   value="<?= $fname == 'default' ? '' : ucfirst($fname) ?>" placeholder="First name">
        </div>
        <div class="form-group">
            <input required="" type="text" class="form-control lname"
                   value="<?= $lname == 'default' ? '' : ucfirst($lname) ?>" placeholder="Last name">
        </div>
        <div class="form-group">


            <select required="" id="usertype" style="width:100%" class="populate usertype">

                <optgroup label="Available User types">
                    <option selected="" class="text-info" value="<?=$usr_type?>"><?=ucwords(get_usertype($usr_type,'title'))?></option>
                    <?php
                    $usertypes=get_active_usertypes();
                    foreach($usertypes as $type)
                    {
                        ?>
                        <option value="<?=$type['id']?>"><?=ucwords($type['usertype'])?></option>
                    <?php


                    }
                    ?>
                </optgroup>

            </select>

        </div>

        <div class="form-group">
            <input  type="email" required="" value="<?=$email?>" class="form-control email" placeholder="Email">
        </div>
        <div class="form-group">
            <input  type="password" class="form-control password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control cpassword" placeholder="Re-enter password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary register" value="Edit">
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


    });


    $('.register').click(function(){

        //loading gif
        $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


        var fname           =$('.fname').val();
        var lname           =$('.lname').val();
        var email           =$('.email').val();
        var usertype        =$('#usertype').val();
        var password        =$('.password').val();
        var cpassword       =$('.cpassword').val();

        var form_data =
        {
            fname :      fname,
            lname :      lname,
            email :      email,
            usertype:    usertype,
            password:    password,
            cpassword:   cpassword,
            passed_id:     '<?=$id?>',
            ajax:        'edit_content'
        };

        $.ajax({
            url: "<?php echo site_url('admin/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
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