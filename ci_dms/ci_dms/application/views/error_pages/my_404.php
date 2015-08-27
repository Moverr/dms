<?php
if($this->session->userdata('user_id')){
    ?>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1><span class="text-xxxl text-light">404 <i class="fa fa-search-minus text-primary"></i></span></h1>
            <h2 class="text-light">This page does not exist</h2>
            <footer>
                <a href="javascript:history.go(-1)"><i style="font-size: 36px;" class="md md-keyboard-backspace"></i></a>
                <a href="<?=base_url().$this->uri->segment(1).'/dashboard'?>"><i style="font-size: 36px;" class="md md-home"></i></a>
            </footer>
        </div><!--end .col -->
    </div>
<?php
}else{
    ?>
    <!-- row -->
    <div class="row error">
        <div class="col-md-4 col-md-offset-1 center">
            <div class="center">
                <img src="<?=base_url()?>assets_frontend/assets/images/error-icon-bucket.png " class="error-icon">
            </div>
        </div>
        <div class="col-md-5 content center">
            <h1 class="strong">Oups!</h1>
            <h4 class="innerB">This page does not exist.</h4>
            <div class="well">
                SORRY FOLKS, THIS PART IS CLOSED
            </div>
        </div>
    </div>
    <!-- // END row-app -->
<?php
}
?>




