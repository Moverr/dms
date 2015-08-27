<?php
require_once(APPPATH . 'third_party/facebook/facebook.php');


$status = 'foo';
$facebook_id = '436691286456982';
$params = array(
    'access_token' => 'b51067818bbcd34e9944d844aa27ff63',
    'message' => $status
);
$url = "https://graph.facebook.com/$facebook_id/feed";
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_VERBOSE => true
));
$result = curl_exec($ch);


?>

<div class="card">

    <div class="card-body text-default-light">
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary"
               href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>/add"><i class="fa fa-plus"></i></a>
        </p>

        <div class="table-responsive">
            <table class="table no-margin">
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
                $active_parent_categories = array();
                foreach ($all_files as $row) {
                    $active_parent_categories[] = $row['id'];

                    //if the trash ias active
                    if (get_file_category_info_by_id($row['file_category'], 'trash') == 'n') {
                        ?>
                        <tr>

                            <td>
                                <?php
                                //if user has permission
                                if (check_my_access('delete_files')) {
                                    ?>
                                    <a class="action_btn" href=""
                                       data-id="<?= $row['id'] ?>" data-action="delete_file"
                                       data-title="Delete  <?= ucwords($row['title']) ?>"
                                       data-toggle="modal"
                                       data-target="#myModal"><i
                                            class="md md-delete"></i></a>
                                <?php
                                }
                                if (check_my_access('edit_files')) {
                                    ?>
                                    <a class="action_btn"
                                       href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/edit_file/' . encryptValue($row['id']) ?>"><i
                                            class="md md-edit"></i></a>
                                <?php
                                }

                                if (check_my_access('add_trending')) {
                                    ?>
                                    <a class="action_btn" href="<?= base_url() . $this->uri->segment(1) . '/admin_trending/add_trend/files/' . encryptValue($row['id']) ?>" ><i class="md md-trending-up"></i></a>
                                <?php
                                }

                                if (check_my_access('share_files')) {
                                    ?>
                                    <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/share_file/' . encryptValue($row['id']) ?>"><i
                                            class="md md-share "></i> share</a>
                                <?php
                                }
                                ?>


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
                                           class="fancybox"
                                           title="<?= $row['description'] ?>">
                                            <img width="32px" height="32px"
                                                 class="img-circle "
                                                 src="<?= base_url() . 'uploads/files/' . get_thumbnail($row['fileurl']) ?>">
                                        </a>

                                        <?php
                                        break;
                                    //videos
                                    case '2':
                                        //if internet is on
                                        if (check_internet_connection()) {

                                            ?>


                                            <a href="<?= video_image($row['fileurl']) ?>"
                                               class="fancybox"
                                               title="<?= $row['description'] ?>">
                                                <img width="32px" height="32px"
                                                     class="img-circle "
                                                     src="<?= video_image($row['fileurl']) ?>">
                                            </a>
                                        <?php

                                        } else {
                                            ?>
                                            <a target="_blank"
                                               href="<?= $row['fileurl'] ?>">See
                                                video</a>
                                        <?php
                                        }

                                        break;
                                    //others
                                    case '3':
                                        ?>
                                        <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/download/' . $row['fileurl'] ?>"><i
                                                class="fa fa-download"></i> <?= $row['fileurl'] ?>
                                        </a>
                                        <?php
                                        break;
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/category/' . encryptValue($row['file_category']) ?>"><?= get_file_category_info_by_id($row['file_category'], 'title') ?></a>
                            </td>
                            <td><?= get_file_type_info_by_id($row['file_type'], 'title') ?></td>

                        </tr>
                    <?php
                    }


                }


                ?>
                </tbody>
            </table>
        </div>

    </div>
    <!--end .card-body -->
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        // Persistent Snipper (auto check for broken images)
        $("img").error(function () {
            $(this).attr("src", "<?=base_url()?>uploads/noimage.png");
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