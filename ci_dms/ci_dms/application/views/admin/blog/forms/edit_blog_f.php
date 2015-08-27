<?php
/*
#Author: Cengkuru Micheal
9/23/14
2:54 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$attributes =
    array
    (
        'class' => 'form-horizontal row-border',
        'name'  =>'fileinfo'
    );
echo form_open_multipart(current_url(),$attributes);


?>


<div class="form-group">
    <label for="title" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-6">
        <input type="text" name="title"  value="<?=get_blog_article_info_by_id($id,'title')?>" class="form-control" id="title" placeholder="Article title here">
    </div>
</div>



<div class="form-group">
    <label for="category" class="col-sm-3 control-label">Category</label>
    <div class="col-sm-6">

        <select required="" name="category" id="category" style="width:100%" class="populate">
            <optgroup label="Available categories">
                <option selected value="<?=get_blog_article_info_by_id($id,'category_id')?>" class="text-info"><?=get_blog_article_info_by_id($id,'category')?></option>

                <?php
                $categories=get_active_blog_categories();
                foreach($categories as $row)
                {
                    ?>
                    <option  value="<?=$row['id']?>"><?=ucwords($row['title'])?></option>

                <?php
                }
                ?>
            </optgroup>
        </select>
    </div>

</div>

<div class="form-group">
    <label for="category" class="col-sm-3 control-label">Showcase</label>

    <div class="col-sm-6">

        <select required="" name="showcase" id="showcase" style="width:100%" class="populate">

            <option class="text-info" selected
                    value="<?= get_blog_article_info_by_id($id, 'showcase') ?>"><?= get_blog_article_info_by_id($id, 'showcase') == 'y' ? 'Yes' : 'No' ?></option>
            <option value="n">No</option>
            <option value="y">Yes</option>

        </select>
    </div>

</div>



<div class="form-group">
    <label class="col-sm-3 control-label">Content</label>
    <div class="col-sm-9">
        <textarea   name="content" id="editor0" class="form-control ckeditor message1" >
            <?=get_blog_article_info_by_id($id,'content')?>
        </textarea>

        <script>
            $(document).ready(function(){
                CKEDITOR.replace( 'editor0',
                    {
                        filebrowserBrowseUrl : '<?=base_url()?>kcfinder/browse.php?type=files',
                        filebrowserImageBrowseUrl : '<?=base_url()?>kcfinder/browse.php?type=images',
                        filebrowserFlashBrowseUrl : '<?=base_url()?>kcfinder/browse.php?type=flash',
                        filebrowserUploadUrl : '<?=base_url()?>kcfinder/upload.php?type=files',
                        filebrowserImageUploadUrl : '<?=base_url()?>kcfinder/upload.php?type=images',
                        filebrowserFlashUploadUrl : '<?=base_url()?>kcfinder/upload.php?type=flash'
                    });

            });

        </script>

    </div>
</div>


<div class="form-group">
    <label for="selector1" class="col-sm-3 control-label">Tags</label>

    <div class="col-sm-6">
        <select required="" name="destination[]" multiple="" id="tags" style="width:100%"
                class="populate tags">

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
    <div  class="form-group">
        <div style="margin-top: 20px;"  class="col-sm-6 col-sm-offset-3">
            <div class="btn-toolbar">

                <input type="submit" class="btn btn-primary " id="edit" name="submit" value="submit" />

                <a href="<?=base_url()?>admin/<?=$this->uri->segment(2)?>" class="btn-default btn">Cancel</a>
            </div>
        </div>
    </div>
</div>

<p>
<div class="message">

</div>

</p>





</form>


<script>

    $(document).ready(function()
    {

        $('#selector1').select2();
        $('.populate').select2();
        $('.tokenfield').tokenfield();


    });


</script>


<script>

    $(document).ready(function () {






        $('#edit').click(function(){

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }


            var title               =$('#title').val();
            var category            =$('#category').val();
            var content             =jQuery("textarea.message1").val();
            var tags                =$('#tags').val();
            var id                  ='<?=$id?>';


            var form_data =
            {
                title :             title,
                category :          category,
                content :           content,
                tags :              tags,
                id:                 id,
                ajax:               'edit_blog'
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

 