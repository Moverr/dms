
<?php
/*
#Author: Cengkuru Micheal
9/23/14
2:54 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

foreach($category_info as $info)
{
    $id=$info['id'];
}


?>

<div class="block">
    <form class="form-horizontal">
        <div class="form-group">
            <label for="usertype" class="col-sm-3 control-label">Category name</label>
            <div class="col-sm-6">
                <input type="text" value="<?=get_file_category_info_by_id($id,'title')?>"   class="form-control" id="title" placeholder="category...">
            </div>
        </div>



        <div class="form-group">
            <label for="selector1" class="col-sm-3 control-label">Tags</label>

            <div class="col-sm-6">
                <select id="tags" name="tags[]" multiple="" style="width:100%"
                         class="populate profiletype">

                    <optgroup label="Current actions">

                        <?php

                        foreach (get_all_tags() as $tag) {
                            ?>
                            <option value="<?= $tag['id'] ?>"><?= ucwords($tag['title']) ?></option>
                        <?php
                        }
                        ?>
                    </optgroup>

                </select>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                    <button id="create" class="btn-primary btn ">Submit</button>
                    <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>" class="btn-default btn">Cancel</a>
                </div>
            </div>
        </div>

    </form>
    <p>
    <div class="message">

    </div>
    </p>

</div>





<script>

    $(document).ready(function()
    {

        $('#selector1').select2();
        $('.populate').select2();
        $('.tokenfield').tokenfield();
        $('.datepicker').datepicker();


        $('#create').click(function()
        {

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');




            var title               =$('#title').val();
            var tags                =$('#tags').val();

            var form_data =
            {
                title :             title,
                id:                 '<?=$id?>',
                tags : tags,
                ajax:               'edit_file_category'
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



    });


</script>

