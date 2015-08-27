<!-- START CONTENT FRAME -->
<div class="content-frame">

    <!-- START CONTENT FRAME TOP -->
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-arrow-circle-o-left"></span> <?= $pagetitle ?></h2>
        </div>
        <div class="pull-right">
            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
        </div>
    </div>
    <!-- END CONTENT FRAME TOP -->
    <div style="margin: 10px;" class="row">
        <?= $this->load->view($sub_view) ?>

    </div>


    <!-- END CONTENT FRAME BODY -->
</div>
<!-- END CONTENT FRAME -->