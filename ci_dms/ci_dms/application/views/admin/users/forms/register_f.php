<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/14
 * Time: 1:27 PM
 * registration form
 */
?>

<div class="block">
    <p>
        <a class="btn ink-reaction btn-floating-action btn-primary" href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>"><i class="fa fa-list"></i></a>
    </p>
    <form id="registerform" class="form" method="post" name="registerform" action="#">

        <div class="form-group">
            <select id="select1" name="select1" class="form-control">
                <option value="">&nbsp;</option>
                <option value="30">Group 1</option>
                <option value="40">Group 2</option>
                <option value="50">Group 3</option>
            </select>
            <label for="select1">Select user group</label>
        </div>



        <div class="form-group">
            <input type="text" class="form-control" id="regular1">
            <label for="regular1">Email</label>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary register" value="Add user">
        </div>

        <div class="message">

        </div>


    </form>

    <script>

        $(document).ready(function()
        {

            $('#selector1').select2();
            $('.populate').select2();


        });







        $('.register').click(function(){

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            var email           =$('.email').val();
            var usertype        =$('#usertype').val();

            var form_data =
            {

                email :      email,
                usertype:    usertype,
                ajax:        'register'
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
</div>

