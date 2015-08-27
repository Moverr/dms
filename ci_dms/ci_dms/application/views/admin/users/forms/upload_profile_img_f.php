<?php
/*
#Author: Cengkuru Micheal
9/23/14
2:54 PM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
foreach($user_info as $row)
{
    $user_id=$row['id'];
    $avatar=$row['avatar'];
}
?>
<?php
$attributes =
    array
    (
        'class' => 'form-horizontal row-border',
        'name'  =>'fileinfo'
    );
echo form_open_multipart(current_url(),$attributes);

//if there are errors
if(isset($errors))
{
    echo error_template($errors);
}

if(isset($success))
{
    echo success_template('Image was successfully uploaded <a class="btn btn-sm btn-primary" href="'.current_url().'">Refresh page</a>');
}
?>


<input  type="hidden"  name="user_id" value="<?=$user_id?>" class="form-control" id="user_id" >


<div class="form-group">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-10">
        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"><img src="<?=base_url().'uploads/avatars/'.get_thumbnail($avatar)?>"></div>
        <?php
        $data = array
        (
            'name'        => 'userfile',
            'id'          => 'userfile',
            'value'       => set_value('userfile'),
            'maxlength'   => '',
            'size'        => '',
            'style'       => '',
            'class'       => 'fileinput btn-info',
            'data-filename-placement'   =>'inside',
            'title'                     =>'New filename goes inside'
        );

        echo form_upload($data);

        ?>
    </div>
</div>


<input type="submit" class="btn btn-primary " id="upload" name="upload" value="Upload Image" />


</form>

