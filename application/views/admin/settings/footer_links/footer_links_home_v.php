<?php
/*
#Author: Cengkuru Micheal
9/2/14
10:49 AM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>



<div style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
                <p>

                    <?php
                    //if user has permission
                    if (check_my_access('add_footer_links')) {
                        ?>

                        <a class="btn ink-reaction btn-floating-action btn-primary"
                           href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) ?>/add_footer_link"><i
                                class="fa fa-plus"></i></a>

                    <?php

                    }
                    ?>

                </p>
                <?php

                if (isset($success_msg)) {
                    echo success_template($success_msg);
                }

                if (isset($error_msg)) {
                    echo error_template($error_msg);
                }

                ?>
                <div class="table-responsive">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Logo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //print_array($all_houses_paginated);
                        foreach ($all_tags as $row) {
                            ?>
                            <tr>
                                <td>

                                    <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/edit_footer_link/'.encryptValue($row['id'])?>"><i class="md md-edit"></i></a>  <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/delete_footer_link/'.encryptValue($row['id'])?>"><i class="md md-delete"></i></a> &nbsp;
                                    <a id="<?= encryptValue($row['id']) ?>" href="#" class="context-menu-one box menu-1">
                                        <?= ucwords($row['title']); ?>
                                    </a>


                                </td>

                                <td>
                                    <a target="_blank" id="<?= encryptValue($row['id']) ?>" href="<?=$row['footer_link']?>" class="context-menu-one box menu-1">
                                        <?= ($row['footer_link']); ?> <i class="md md-link"></i>
                                    </a>



                                </td>

                                <td>
                                    <?php
                                    if($row['imageurl']){
                                        ?>
                                        <a href="<?= base_url() . 'uploads/footer_link_logos/' . $row['imageurl'] ?>"
                                           class="fancybox" title="<?= $row['title'] ?>">
                                            <img class="img-circle" width="32px" height="32px"
                                                 src="<?= base_url() ?>uploads/footer_link_logos/<?= get_thumbnail($row['imageurl']) ?>">
                                        </a>
                                    <?php
                                    }
                                    ?>


                                    <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/footer_link_logo/'.encryptValue($row['id'])?>"><?=$row['imageurl']!==''?'update':'upload'?> Logo</a> </td>

                            </tr>
                        <?php
                        }


                        ?>


                        </tbody>
                    </table>
                </div>


            </div>
        </div>


    </div>

</div>


<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
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
    $(function () {
        $.contextMenu({
            selector: '.context-menu-one',
            callback: function (key, opt) {
                var m = key;
                //window.console && console.log(m) || alert(m);
                var id = ($(this).attr('id'));
                if (m == 'edit') {

                    var url = '<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/edit_footer_link/'?>' + id;
                    window.location = url;
                } else {
                    if (confirm('Do you wan\'t to delete this item?')) {
                        // do delete item
                        var url = '<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/delete_footer_link/'?>' + id;
                        window.location = url;
                    }

                }
            },
            items: {
                "edit": {name: "Edit", icon: "edit"},
                "delete": {name: "Delete", icon: "delete"}
            }
        });

        $('.context-menu-one').on('click', function (e) {
            console.log('clicked', this);
        })
    });

    //when ann action butoon is clicked
    $('.action_btn').click(function () {
        //get model content
        var modal_title = $(this).data('title');
        var action = $(this).data('action');
        //alert($(this).data('id'));


        //replace the model title
        $("#myModalLabel").html(modal_title);

        //replace modal content
        $(".modal-body").html('<img src="<?=base_url()?>images/loading.gif" />');

        //switch depending on action
        switch (action) {

            case 'delete_tag':
                var category_data =
                {
                    ajax: action,
                    passed_id: $(this).data('id')
                };
                //alert($(this).data('id'));
                $.ajax({
                    url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                    type: 'POST',
                    data: category_data,
                    success: function (msg) {

                        $('.modal-body').html(msg);

                    }
                });
                break;

        }
    });
</script>


<!--end jquery-->




