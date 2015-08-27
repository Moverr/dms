<?php 
/*
#Author: Cengkuru Micheal
9/13/14
10:55 AM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <p class="text-center">
                <span class="text-danger" style="font-size:4em;">Access Restricted</span>
            </p>
            <p class="text-center">Access to this page had been restricted</p>
            <p class="text-center">Here is a summary of what you can access</p>
            <div class="panel panel-primary">
                <div class="panel-body">
                    <?php
                    $my_permission_groups=array();
                    foreach(logged_in_user_permissions() as $permission)
                    {
                        //get permission groups
                        if(!in_array(get_permission_info($permission,'group_id'),$my_permission_groups))
                        {
                            $my_permission_groups[]=get_permission_info($permission,'group_id');
                        }
                        ?>
<!--                        <i class="fa fa-check"></i> --><?//=get_permission_info($permission,'title')?>
                    <?php
                    }

                    //loop through groups
                    foreach($my_permission_groups as $group)
                    {
                        ?>
                        <div class="panel panel-green col-md-4">
                            <div class="panel-body">
                                <h3><?=get_permission_group_info($group,'title')?></h3>
                                <?php
                                //get logged in user's permissions by group
                                foreach(logged_in_user_permissions() as $permission)
                                {
                                    //if the groups match display the permission
                                    if(get_permission_info($permission,'group_id')==$group)
                                    {
                                        ?>
                                        <div class="checkbox block">
                                            <label>
                                                <input checked disabled value="25" type="checkbox"> <?=get_permission_info($permission,'title')?>
                                            </label>
                                        </div>
                                <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    <?php
                    }

                    ?>
                </div>
            </div>

        </div>
    </div>

</div>





<script>
    $(function () {
        $(".pulse").pulsate({reach:20});
    });
</script>

 