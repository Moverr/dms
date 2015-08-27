<?php
/*
#Author: Cengkuru Micheal
8/21/14
3:53 PM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<p>

<div id="footer_msg">

</div>
</p>

<form class="form">
    <div class="form-group">
        <input required="" id="footer_title" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title="Provide title of the link" type="text" placeholder="Enter link name" class="form-control" id="regular1">
        <label for="regular1">Link title</label>
    </div>

    <div class="form-group">
        <input required="" id="footer_url" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title=" Example: <?=base_url()?>" type="text" class="form-control" id="placeholder1" placeholder="Enter link URL">
        <label for="placeholder1">Link url</label>
    </div>

    <button id="add_link" type="button" class="btn ink-reaction btn-raised btn-primary">Add</button>




</form>

<script>
    $(document).ready(function(){
        $('#add_link').click(function(){
            $('#footer_msg').html('<img src="<?=base_url()?>images/loading.gif">');
            var footer_title=$('#footer_title').val();
            var footer_url=$('#footer_url').val()

            var form_data={
                footer_title:footer_title,
                footer_url:footer_url,
                ajax:'add_footer_link'
            }

            $.ajax({
                url:'<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>',
                type:'POST',
                data:form_data,
                success:function(msg){
                    $('#footer_msg').html(msg);
                }
            });

            return false;
        });
    });
</script>