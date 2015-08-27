<p>
    <a class="btn ink-reaction btn-floating-action btn-primary"
       href="<?=base_url().$this->uri->segment(1).'/admin_trending'?>"><i class="fa fa-list"></i></a>

</p>
<h3>Add Trend</h3>
<p>
<div class="trend_msg">

</div>
</p>
<?php

?>

<form class="form">
    <div class="form-group">
        <div class="input-daterange input-group" id="demo-date-range">
            <div class="input-group-content">
                <input type="text" class="form-control start"  name="start" />
                <label>Date range</label>
            </div>
            <span class="input-group-addon">to</span>
            <div class="input-group-content">
                <input type="text" class="form-control end" name="end" />
                <div class="form-control-line"></div>
            </div>
        </div>
    </div>

    <button type="button" id="add_trend" class="btn ink-reaction btn-raised btn-primary">Add</button>
</form>
<script>
    $(document).ready(function(){
        $('#demo-date-range').datepicker({todayHighlight: true});

        $('#add_trend').click(function(){
            $('.trend_msg').html('<img src="<?=base_url()?>images/loading.gif">');
            var from_date=$('.start').val();
            var end_date =$('.end').val();

            var form_data={
                start_date:from_date,
                end_date:end_date,
                group_id:'<?=$group_id?>',
                item_id:'<?=$id?>',
                ajax:'add_trend'
            }

            $.ajax({
                url:'<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)?>',
                type:'POST',
                data:form_data,
                success:function(msg){
                    $('.trend_msg').html(msg);
                }
            });

            return false;
        });


    });
</script>