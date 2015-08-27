
<div class="card">
    <div class="card-head">
        <header><?=$pagetitle?></header>
    </div>

    <div class="card-body text-default-light">
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary" href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>/add"><i class="fa fa-plus"></i></a>
        </p>
        <div class="btn-group pull-right">

            <button class="btn btn-icon-toggle btn-default dropdown-toggle" data-toggle="dropdown"><i class="md md-more-vert"></i>
            </button>
            <ul class="dropdown-menu">

                <li><a href="#" onClick="$('#customers2').tableExport({type:'doc',escape:'false'});"><img
                            src='<?= base_url() ?>assets_backend/img/icons/word.png' width="24"/> Word</a></li>

                <li><a href="#" onClick="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img
                            src='<?= base_url() ?>assets_backend/img/icons/pdf.png' width="24"/> PDF</a></li>
            </ul>
        </div>
        <div id="customers2" class="panel-body">
            <table class="table datatable">
                <thead>
                <tr>
                    <th>Page</th>
                    <th>Group</th>
                    <th>Category</th>
                    <th>Date added</th>
                </tr>
                </thead>
                <tbody>
                <tr>

                    <td class="hidden-xs">Our Vision</td>
                    <td>About us</td>
                    <td>Vision</td>
                    <td>Aug / 15 / 2015</td>
                </tr>
                <tr>

                    <td class="hidden-xs">Our Mission</td>
                    <td>About us</td>
                    <td>Mission</td>
                    <td>Aug / 15 / 2015</td>
                </tr>
                <tr>

                    <td class="hidden-xs">Importance of document management</td>
                    <td>Blog</td>
                    <td>Document management</td>
                    <td>Aug / 15 / 2015</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><!--end .card-body -->
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
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
//        $('#customers2').tableExport({type: 'doc', escape: 'false'})
        //when ann action butoon is clicked
        $('.action_btn').click(function () {
            //get model content
            var modal_title = $(this).data('title');
            var action = $(this).data('action');
            //alert(action);


            //replace the model title
            $("#myModalLabel").html(modal_title);

            //replace modal content
            $(".spinner").html('<img src="<?=base_url()?>images/loading.gif" /> please wait');

            //switch depending on action
            switch (action) {

                //when editing
                case 'edit_usertype':
                    //alert($(this).data('id'));
                    var activity_data =
                    {
                        ajax: action,
                        usertype_id: $(this).data('id')
                    };

                    $.ajax({
                        url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/edit') ?>",
                        type: 'POST',
                        data: activity_data,
                        success: function (msg) {

                            $('.spinner').html(msg);

                        }
                    });
                    break;

                //by default
                default :
                    $(".modal-body").html('<div class="alert alert-dismissable alert-info"><strong>Uh Oh!</strong>  Contact the programmer ASAP! This is a logical error<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> </div>');
            }
        });
    });

</script>
