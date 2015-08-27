
</section>
</div>
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT -->

</div>
<!-- END PAGE CONTAINER -->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if you want to continue work. Press Yes to logout current user.</p>
            </div>

            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?=base_url().$this->uri->segment(1)?>/login/logout" class="btn btn-success btn-lg logout">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--BEGIN CUSTOM JS--->
<script type="text/javascript" src="<?= base_url() ?>js/my_js_library.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery.form.min.js"></script>
<!--END CUSTOM---JS--->


<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="<?=base_url()?>assets_backend/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="<?=base_url()?>assets_backend/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->
<!-- START SCRIPTS -->
<!-- START PLUGINS -->



<!-- START THIS PAGE PLUGINS-->
<script type='text/javascript' src='<?=base_url()?>assets_backend/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/rickshaw/d3.v3.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript' src='<?=base_url()?>assets_backend/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>assets_backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/owl/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/select2.js"></script>
<script type="text/javascript" src="j<?=base_url()?>assets_backend/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type='text/javascript' src='<?=base_url()?>assets_backend/assets/plugins/form-multiselect/js/jquery.multi-select.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>assets_backend/assets/plugins/form-select2/select2.min.js'></script>
<script type='text/javascript' src='<?=base_url()?>assets_backend/assets/plugins/form-ckeditor/ckeditor.js'></script>
<script type='text/javascript' src='<?=base_url()?>assets_backend/assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js'></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins/datatables/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets_backend/js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets_backend/js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets_backend/js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets_backend/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets_backend/js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets_backend/js/plugins/tableexport/jspdf/libs/base64.js"></script>


<!-- Add jQuery library -->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?=base_url()?>assets_backend/assets/plugins/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>


<script type="text/javascript" src="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="<?=base_url()?>assets_backend/assets/plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/assets/plugins/jquery_notify/js/jquery.notify.min.js"></script>

<script src="<?= base_url() ?>assets_backend/assets/plugins/highcharts/highcharts.js"></script>
<script src="<?= base_url() ?>assets_backend/assets/plugins/highcharts/exporting.js"></script>
<script src="<?= base_url() ?>assets_backend/assets/plugins/highcharts/highcharts-3d.js"></script>


<script type="text/javascript"
        src="<?= base_url() ?>assets_backend/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets_backend/js/plugins/dropzone/dropzone.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>js/jquery.PrintArea.js"></script>

<script type="text/javascript"
        src="<?= base_url() ?>assets_backend/assets/plugins/selectize/js/selectize.min.js"></script>



<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/settings.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/plugins.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets_backend/js/actions.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets_backend/js/demo_dashboard.js"></script>
<!-- END TEMPLATE -->

<!-- END SCRIPTS -->





<!-- BEGIN MY TEMPLATE JS--->

<script src="<?=base_url()?>assets/js/libs/spin.js/spin.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.time.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.resize.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.orderBars.js"></script>
<script src="<?=base_url()?>assets/js/libs/flot/jquery.flot.pie.js"></script>
<script src="<?=base_url()?>assets/js/libs/flot/curvedLines.js"></script>
<script src="<?=base_url()?>assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/d3/d3.min.js"></script>
<script src="<?=base_url()?>assets/js/libs/d3/d3.v3.js"></script>
<script src="<?=base_url()?>assets/js/libs/rickshaw/rickshaw.min.js"></script>
<script src="<?=base_url()?>assets/js/core/source/App.js"></script>
<script src="<?=base_url()?>assets/js/core/source/AppNavigation.js"></script>
<script src="<?=base_url()?>assets/js/core/source/AppOffcanvas.js"></script>
<script src="<?=base_url()?>assets/js/core/source/AppCard.js"></script>
<script src="<?=base_url()?>assets/js/core/source/AppForm.js"></script>
<script src="<?=base_url()?>assets/js/core/source/AppNavSearch.js"></script>
<script src="<?=base_url()?>assets/js/core/source/AppVendor.js"></script>
<script src="<?=base_url()?>assets/js/core/demo/Demo.js"></script>
<script src="<?=base_url()?>assets/js/core/demo/DemoDashboard.js"></script>
<!-- END JAVASCRIPT -->

</body>
</html>


























