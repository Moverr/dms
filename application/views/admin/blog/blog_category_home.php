<?php
/*
#Author: Cengkuru Micheal
9/2/14
10:49 AM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>


            <div class="card">

                <div class="card-body text-default-light">
                    <?php
                    //if user has permission
                    if(check_my_access('add_blog_categories'))
                    {
                        ?>
                        <a class="btn ink-reaction btn-floating-action btn-primary"
                                                   href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>/add_category"><i class="md md-add"></i></a>

                    <?php

                    }

                    ?>

                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Title</th>

                            <th >DELETE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //print_array($all_houses_paginated);
                        foreach($all_blog_categories_paginated as $row)
                        {
                            ?>
                            <tr>
                                <td>
                                    <i class="text-danger fa-2x <?= $row['icon'] ?>"></i>
                                    <?php

                                    echo ucwords($row['title']);
                                    ?>


                                </td>
                                <td >
                                    <?php
                                    if($row['lock']=='n')
                                    {
                                        //if user has permission
                                        if (check_my_access('edit_blog_categories')) {
                                            ?>
                                            <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/edit_blog_category/' . encryptValue($row['id']) ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        <?php
                                        }
                                        if(check_my_access('delete_blog_categories'))
                                        {
                                            ?>
                                            <a class="action_btn" href="" data-id="<?=$row['id']?>" data-action="delete_blog_category" data-title="Delete  <?=ucwords($row['title'])?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></a>
                                        <?php
                                        }
                                        ?>



                                    <?php
                                    }
                                    else
                                    {
                                        ?>

                                        <button disabled class="btn btn-xs btn-default">System</button>
                                    <?php
                                    }
                                    ?>

                                </td>
                            </tr>
                        <?php
                        }


                        ?>

                        <?=$pages?>


                        </tbody>
                    </table>
                </div>
                </div><!--end .card-body -->
            </div>






<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Logo</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--jquery here-->
<script>

    //when ann action butoon is clicked
    $('.action_btn').click(function(){
        //get model content
        var modal_title=$(this).data('title');
        var action=$(this).data('action');
        //alert($(this).data('id'));


        //replace the model title
        $("#myModalLabel").html(modal_title);

        //replace modal content
        $(".modal-body").html('<img src="<?=base_url()?>images/loading.gif" />');

        //switch depending on action
        switch (action)
        {

            case 'delete_blog_category':
                var category_data=
                {
                    ajax:action,
                    id:$(this).data('id')
                };
                $.ajax({
                    url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                    type: 'POST',
                    data: category_data,
                    success: function(msg)
                    {

                        $('.modal-body').html(msg);

                    }
                });
                break;

        }
    });
</script>




<!--end jquery-->




