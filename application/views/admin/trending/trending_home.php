<div style="margin-top: 24px">

<?php
//print_array($all_trending);
if(count($all_trending)){
    ?>
<div class="row">
    <?php
    foreach(get_trending_groups() as $grp){
        //show only groups with trends
        if(get_trends_by_group($grp['title'])){
            ?>
            <!-- BEGIN TODOS -->
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-head">
                        <header>Trending <?=ucwords($grp['title'])?></header>

                    </div><!--end .card-head -->
                    <div class="card-body no-padding height-9 scroll">
                        <ul class="list" data-sortable="true">

                            <?php
                            foreach($all_trending as $trend){
                                if($trend['title']==$grp['title']){
                                    //switch depending on group
                                    switch($grp['title']){
                                        case 'blog':
                                            ?>
                                            <li class="tile">

                                                <div class="tile-text">
                                                    <div class="btn-group pull-right">

                                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            if(check_my_access('delete_trends')){
                                                                ?>
                                                                <li><a class="action_btn" href="" data-id="<?= $trend['id']?>"
                                                                       data-action="delete_trend"

                                                                       data-title="Untrend  <?= ucwords(get_blog_article_info_by_id($trend['item_id'],'title')) ?>" data-toggle="modal"
                                                                       data-target="#myModal">
                                                                        <i class=" text-danger md md-delete"></i>
                                                                    </a></li>
                                                            <?php
                                                            }

                                                            ?>




                                                        </ul>
                                                    </div>
                                                    <label>


                                                            <div class="col-md-3">
                                                                <a href="<?= base_url() . 'uploads/blogs/' . get_blog_article_info_by_id($trend['item_id'],'image')?>"
                                                                   class="fancybox" title="<?= get_blog_article_info_by_id($trend['item_id'],'title') ?>">
                                                                    <img class="img-circle" width="32px" height="32px"
                                                                         src="<?= base_url() ?>uploads/blogs/<?= get_thumbnail(get_blog_article_info_by_id($trend['item_id'],'image')) ?>">
                                                                </a>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <span><?=get_blog_article_info_by_id($trend['item_id'],'title')?></span><br>
                                                        <small><b>From:</b> <?=custom_date_format('d / M ',$trend['start_date'])?> <br><b>To:</b> <?=custom_date_format('d / M ',$trend['end_date'])?></small>

                                                            </div>


                                                    </label>
                                                </div>



                                            </li>
                                            <?php
                                            break;
                                        case 'news':
                                            ?>
                                            <li class="tile">
                                                <div class="tile-text">
                                                    <div class="btn-group pull-right">

                                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            if(check_my_access('delete_trends')){
                                                                ?>
                                                                <li><a class="action_btn" href="" data-id="<?= $trend['id']?>"
                                                                       data-action="delete_trend"

                                                                       data-title="Untrend  <?= ucwords(get_news($trend['item_id'],'title')) ?>" data-toggle="modal"
                                                                       data-target="#myModal">
                                                                        <i class=" text-danger md md-delete"></i>
                                                                    </a></li>
                                                            <?php
                                                            }

                                                            ?>




                                                        </ul>
                                                    </div>
                                                    <label>


                                                        <div class="col-md-3">
                                                            <a href="<?= base_url() . 'uploads/news_covers/' . get_news($trend['item_id'],'image')?>"
                                                               class="fancybox" title="<?= get_news($trend['item_id'],'title') ?>">
                                                                <img class="img-circle" width="32px" height="32px"
                                                                     src="<?= base_url() ?>uploads/news_covers/<?= get_thumbnail(get_news($trend['item_id'],'image')) ?>">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <span><?=get_news($trend['item_id'],'title')?></span><br>
                                                            <small><b>From:</b> <?=custom_date_format('d / M ',$trend['start_date'])?> <br><b>To:</b> <?=custom_date_format('d / M ',$trend['end_date'])?></small>

                                                        </div>


                                                    </label>
                                                </div>

                                            </li>
                                            <?php
                                            break;
                                        case 'careers':
                                            echo 'foo';
                                            break;
                                        case 'files':
                                            ?>
                                            <li class="tile">
                                                <div class="tile-text">
                                                    <div class="btn-group pull-right">

                                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            if(check_my_access('delete_trends')){
                                                                ?>
                                                                <li><a class="action_btn" href="" data-id="<?= $trend['id']?>"
                                                                       data-action="delete_trend"

                                                                       data-title="Untrend  <?= ucwords(get_file_info_by_id($trend['item_id'],'title')) ?>" data-toggle="modal"
                                                                       data-target="#myModal">
                                                                        <i class=" text-danger md md-delete"></i>
                                                                    </a></li>
                                                            <?php
                                                            }

                                                            ?>




                                                        </ul>
                                                    </div>
                                                    <label>


                                                        <div class="col-md-3">

                                                            <?php
                                                            switch (get_file_info_by_id($trend['item_id'],'file_type_id')) {
                                                                //case of images
                                                                case '1':
                                                                    ?>
                                                                    <a href="<?= base_url() . 'uploads/files/' . get_file_info_by_id($trend['item_id'],'file_url') ?>"
                                                                       class="fancybox"
                                                                       title="<?= get_file_info_by_id($trend['item_id'],'title') ?>">
                                                                        <img width="32px" height="32px"
                                                                             class="img-circle "
                                                                             src="<?= base_url() . 'uploads/files/' . get_thumbnail(get_file_info_by_id($trend['item_id'],'file_url')) ?>">
                                                                    </a>

                                                                    <?php
                                                                    break;
                                                                //videos
                                                                case '2':
                                                                    //if internet is on

                                                                        ?>
                                                                    <a target="_blank"
                                                                       href="<?= get_file_info_by_id($trend['item_id'],'file_url') ?>">See
                                                                        video</a>
                                                                    <?php


                                                                    break;
                                                                //others
                                                                case '3':
                                                                    ?>
                                                                    <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/download/' . get_file_info_by_id($trend['item_id'],'file_url') ?>"><i
                                                                            class="fa fa-download"></i> <?= get_file_info_by_id($trend['item_id'],'title')?>
                                                                    </a>
                                                                    <?php
                                                                    break;
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <span><?=get_event_info($trend['item_id'],'title')?></span><br>
                                                            <small><b>From:</b> <?=custom_date_format('d / M ',$trend['start_date'])?> <br><b>To:</b> <?=custom_date_format('d / M ',$trend['end_date'])?></small>

                                                        </div>


                                                    </label>
                                                </div>

                                            </li>
                                            <?php
                                            break;
                                        case 'events':
                                            ?>
                                            <li class="tile">
                                                <div class="tile-text">
                                                    <div class="btn-group pull-right">

                                                        <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            if(check_my_access('delete_trends')){
                                                                ?>
                                                                <li><a class="action_btn" href="" data-id="<?= $trend['id']?>"
                                                                       data-action="delete_trend"

                                                                       data-title="Untrend  <?= ucwords(get_event_info($trend['item_id'],'title')) ?>" data-toggle="modal"
                                                                       data-target="#myModal">
                                                                        <i class=" text-danger md md-delete"></i>
                                                                    </a></li>
                                                            <?php
                                                            }

                                                            ?>




                                                        </ul>
                                                    </div>
                                                    <label>


                                                        <div class="col-md-3">
                                                            <a href="<?= base_url() . 'uploads/events/' . get_event_info($trend['item_id'],'image')?>"
                                                               class="fancybox" title="<?= get_event_info($trend['item_id'],'title') ?>">
                                                                <img class="img-circle" width="32px" height="32px"
                                                                     src="<?= base_url() ?>uploads/events/<?= get_thumbnail(get_event_info($trend['item_id'],'image')) ?>">
                                                            </a>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <span><?=get_event_info($trend['item_id'],'title')?></span><br>
                                                            <small><b>From:</b> <?=custom_date_format('d / M ',$trend['start_date'])?> <br><b>To:</b> <?=custom_date_format('d / M ',$trend['end_date'])?></small>

                                                        </div>


                                                    </label>
                                                </div>

                                            </li>
                                            <?php
                                            break;
                                    }

                                }
                            }
                            ?>

                        </ul>
                    </div><!--end .card-body -->
                </div><!--end .card -->
            </div><!--end .col -->
            <!-- END TODOS -->
        <?php
        }

    }
    ?>




</div>

</div>
    <?php
}else{
?>
        <div class="row">
            <div class="card">
                <div class="card-head">
                    <header> <a class="btn ink-reaction btn-floating-action btn-primary"
                                href="#"><i class="fa fa-list"></i></a></header>
                </div>
                <div class="card-body text-default-light">
                    <?=$this->load->view('admin/trending/forms/add_trend_f')?>
                </div><!--end .card-body -->
            </div>
        </div>

<?php
}
?>

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

                case 'delete_trend':
                    var tender_data =
                    {
                        ajax: action,
                        id: $(this).data('id')
                    };
                    $.ajax({
                        url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                        type: 'POST',
                        data: tender_data,
                        success: function (msg) {

                            $('.modal-body').html(msg);

                        }
                    });
                    break;

            }
        });


    });


</script>



