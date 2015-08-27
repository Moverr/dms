<?php
foreach ($logo_info as $row) {
    $img_title = $row['logo_name'];
    $img_width = $row['width'];
    $img_height = $row['height'];
}
?>
<div class="card card-underline">
    <div class="card-head">
        <header><?=$pagetitle?></header>

    </div>
    <!--end .card-head -->
    <div class="card-body">
        <div style="margin-top: 20px">
            <!-- TAB NAVIGATION -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Logo image</a></li>
                <li><a href="#tab2" role="tab" data-toggle="tab">Logo Dimensions</a></li>
            </ul>
            <!-- TAB CONTENT -->
            <div class="tab-content">
                <div class="active tab-pane fade in" id="tab1">


                    <?php
                    if ($img_title && !$this->input->post('upload')) {
                        ?>
                        <div style="margin: 10px;" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <a href="#">
                                <img width="<?= $img_width ?>" height="<?= $img_height ?>"
                                     src="<?= base_url() ?>uploads/site_logo/<?= $img_title ?>" data-src="#" alt="">
                            </a>
                        </div>
                    <?php

                    }
                    ?>

                    <?= $this->load->view('admin/settings/forms/upload_logo_f') ?>

                </div>
                <div class="tab-pane fade" id="tab2">
                    <?= $this->load->view('admin/settings/forms/logo_dimensions_f') ?>
                </div>

            </div>
        </div>
    </div>


</div><!--end .card-body -->