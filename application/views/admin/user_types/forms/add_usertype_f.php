<?php 
/*
#Author: Cengkuru Micheal
8/21/14
3:53 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>

    <div class="block" >
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary" href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>"><i class="fa fa-list"></i></a>
        </p>
        <p>
        <div style="margin-top: 10px;" class="message">

        </div>
        </p>
        <form class="form">
            <div class="form-group">
                <input type="text"  class="form-control" id="usertype" placeholder="">
                <label for="regular1">User type</label>
            </div>
            <button type="button" id="create" class="btn ink-reaction btn-raised btn-primary">Submit</button>

            <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>" class="btn-default btn">Cancel</a>

        </form>



    </div>


<script>
    $(document).ready(function(){
        $(".populate").select2();
        $('#create').click(function(){


            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

            var usertype    =$('#usertype').val();



            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data:
                {
                    usertype :       usertype,
                    ajax:           'add_usertype_f'
                },
                success: function(msg) {

                    $('.message').html(msg);

                }
            });
            return false;

        });
    });

</script>

 