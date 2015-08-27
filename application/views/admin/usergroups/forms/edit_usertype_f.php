<?php 
/*
#Author: Cengkuru Micheal
9/16/14
3:21 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


?>



<div class="block">
    <p>
        <a class="btn ink-reaction btn-floating-action btn-primary" href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>"><i class="fa fa-list"></i></a>
    </p>
    <p>
    <div class="message">

    </div>
    </p>
    <form class="form">
        <div class="form-group">
            <input type="text"required=""
                   value="<?= get_usertype_by_type_id(decryptValue($this->uri->segment(4)), 'title') ?>"
                   class="form-control" id="usertype" placeholder="usertype...">
            <label for="regular1">User type</label>
        </div>

        <button id="edit"  type="button" class="btn ink-reaction btn-raised btn-primary">update</button>

        <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>" class="btn-default btn">Cancel</a>


    </form>


</div>

<script>
    $(document).ready(function(){

        $('#edit').click(function(){


            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Please wait...');

            var usertype    =$('#usertype').val();

            var form_data =
            {
                usertype :       usertype,
                'id': '<?=decryptValue($this->uri->segment(4))?>',
                ajax:           'form_edit'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/edit') ?>",
                type: 'POST',
                data: form_data,
                success: function(msg) {

                    $('.message').html(msg);

                }
            });
            return false;

        });
    });

</script>