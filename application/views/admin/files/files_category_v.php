

        <div class="card">

            <div class="card-body text-default-light">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Preview</th>
                        <th>Category</th>
                        <th>File type</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //print_array($all_houses_paginated);
                    foreach ($all_files as $row) {

                        ?>
                        <tr>

                            <td>
                                <a class="action_btn" href="" data-id="<?= $row['id'] ?>" data-action="delete_file"
                                   data-title="Delete  <?= ucwords($row['title']) ?>" data-toggle="modal"
                                   data-target="#myModal"><i class="fa fa-trash-o text-danger"></i></a>

                                <div data-toggle="tooltip" data-placement="top" title=""
                                     data-original-title="<?= ucwords($row['description']) ?>"><?= ucwords($row['title']) ?></div>

                                <small>
                                    <?= ucwords(time_ago($row['dateadded'])) ?>
                                    | <?= ucwords(get_user_info_by_id($row['author'], 'fullname')) ?>
                                </small>
                            </td>
                            <td>
                                <?php
                                //switch depending on file type
                                switch ($row['file_type']) {
                                    //case of images
                                    case '1':
                                        ?>
                                        <a href="<?= base_url() . 'uploads/files/' . $row['fileurl'] ?>"
                                           class="fancybox" title="<?=$row['description']?>">
                                            <img width="32px" height="32px" class="img-circle "
                                                 src="<?= base_url() . 'uploads/files/' . get_thumbnail($row['fileurl']) ?>">
                                        </a>

                                        <?php
                                        break;
                                    //videos
                                    case '2':
                                        ?>
                                        <a target="_blank" href="<?= $row['fileurl'] ?>">See video</a>
                                        <?php
                                        break;
                                    //others
                                    case '3':
                                        ?>
                                        <span class="label label-danger">Work in progress</span>
                                        <?php
                                        break;
                                }
                                ?>
                            </td>
                            <td><?= get_file_category_info_by_id($row['file_category'], 'title') ?></td>
                            <td><?= get_file_type_info_by_id($row['file_type'], 'title') ?></td>

                        </tr>
                    <?php

                    }
                    ?>

                    </tbody>
                </table>
            </div><!--end .card-body -->
        </div>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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


<script>
    $(document).ready(function () {
        $('.fancybox').fancybox();

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

                case 'delete_file':
                    var category_data =
                    {
                        ajax: action,
                        id: $(this).data('id')
                    };
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
    });



</script>