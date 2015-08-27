<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 11/2/14
 * Time: 9:59 AM
 */

?>
<div class="card">

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
            <table  class="table datatable">
                <thead>
                <tr>

                    <th>User</th>
                    <th>Email</th>

                </tr>
                </thead>
                <tbody>
                <tr>


                    <td >
                        <img class="img-circle pull-left" width="32px" height="32px"
                             src="<?= base_url() ?>uploads/avatars/10982207_878245398895036_1341022485478470456_n.jpg ?>">
                        <a style="padding: 10px;"
                           href="#">Cengkuru Michael</a>
                        <br>
                        <small
                            style="margin-left: 10px;">Regular memeber</small>
                        <br>

                        <?php
                        if (check_my_access('delete_users')) {
                            ?>
                            <a class="action_btn" href="" data-id="1
                               data-action="email_user"
                               data-title="Email  cengkuru"
                               data-toggle="modal" data-target="#myModal"><i class="md md-quick-contacts-mail"></i></a>
                        <?php

                        }

                        if (check_my_access('edit_users')) {
                            ?>
                            <a data-action="edit_user" data-id="#"
                               href="#"><i
                                    class="md md-edit text-info"></i></a>
                        <?php
                        }

                        ?>


                        <a class="action_btn" href=""
                           data-id="#"
                           data-action="delete_user"
                           data-title="Delete  Cengkuru"
                           data-toggle="modal" data-target="#myModal"><i
                                class="md md-delete"></i></a>

                    </td>


                    <td >
                        mcengkuru@newwavetech.co.ug


                    </td>

                </tr>

                <tr>


                    <td >
                        <img class="img-circle pull-left" width="32px" height="32px"
                             src="<?= base_url() ?>uploads/avatars/10982207_878245398895036_1341022485478470456_n.jpg ?>">
                        <a style="padding: 10px;"
                           href="#">Cengkuru Michael</a>
                        <br>
                        <small
                            style="margin-left: 10px;">Regular memeber</small>
                        <br>

                        <?php
                        if (check_my_access('delete_users')) {
                            ?>
                            <a class="action_btn" href="" data-id="1
                               data-action="email_user"
                                                                                                                         data-title="Email  cengkuru"
                                                                                                                         data-toggle="modal" data-target="#myModal"><i class="md md-quick-contacts-mail"></i></a>
                        <?php

                        }

                        if (check_my_access('edit_users')) {
                            ?>
                            <a data-action="edit_user" data-id="#"
                               href="#"><i
                                    class="md md-edit text-info"></i></a>
                        <?php
                        }

                        ?>


                        <a class="action_btn" href=""
                           data-id="#"
                           data-action="delete_user"
                           data-title="Delete  Cengkuru"
                           data-toggle="modal" data-target="#myModal"><i
                                class="md md-delete"></i></a>

                    </td>


                    <td >
                        mcengkuru@newwavetech.co.ug


                    </td>

                </tr>

                <tr>


                    <td >
                        <img class="img-circle pull-left" width="32px" height="32px"
                             src="<?= base_url() ?>uploads/avatars/10982207_878245398895036_1341022485478470456_n.jpg ?>">
                        <a style="padding: 10px;"
                           href="#">Cengkuru Michael</a>
                        <br>
                        <small
                            style="margin-left: 10px;">Regular memeber</small>
                        <br>

                        <?php
                        if (check_my_access('delete_users')) {
                            ?>
                            <a class="action_btn" href="" data-id="1
                               data-action="email_user"
                                                                                                                         data-title="Email  cengkuru"
                                                                                                                         data-toggle="modal" data-target="#myModal"><i class="md md-quick-contacts-mail"></i></a>
                        <?php

                        }

                        if (check_my_access('edit_users')) {
                            ?>
                            <a data-action="edit_user" data-id="#"
                               href="#"><i
                                    class="md md-edit text-info"></i></a>
                        <?php
                        }

                        ?>


                        <a class="action_btn" href=""
                           data-id="#"
                           data-action="delete_user"
                           data-title="Delete  Cengkuru"
                           data-toggle="modal" data-target="#myModal"><i
                                class="md md-delete"></i></a>

                    </td>


                    <td >
                        mcengkuru@newwavetech.co.ug


                    </td>

                </tr>

                </tbody>
            </table>


        </div>

        <b>Pages</b> 1


    </div><!--end .card-body -->
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
        $('.populate').select2();

        //when ann action butoon is clicked
        $('.action_btn').click(function () {
            //get model content
            var modal_title = $(this).data('title');
            var action = $(this).data('action');
            //alert(action);


            //replace the model title
            $("#myModalLabel").html(modal_title);

            //replace modal content
            $(".modal-body").html('<img src="<?=base_url()?>images/loading.gif" />');

            //switch depending on action
            switch (action) {
                /*====================================================================
                 adding new level
                 ====================================================================*/
                case 'add_usertype':
                    var form_data =
                    {
                        ajax: action
                    };
                    //post data ajaxically
                    $.ajax
                    ({

                        //defines the file to handle posted results
                        url: "<?php echo site_url('admin/usertypes/ajax_calls') ?>",
                        type: 'POST',
                        data: form_data,
                        success: function (msg) {

                            $('.modal-body').html(msg);

                        }
                    });

                    break;

                case 'delete_user':
                    var profile_data =
                    {
                        ajax: action,
                        user_id: $(this).data('id')
                    };
                    $.ajax({
                        url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                        type: 'POST',
                        data: profile_data,
                        success: function (msg) {

                            $('.modal-body').html(msg);

                        }
                    });
                    break;

                case 'email_user':
                    //alert('foo');
                    var _data =
                    {
                        ajax: action,
                        user_id: $(this).data('id')
                    };
                    $.ajax({
                        url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/ajax_calls') ?>",
                        type: 'POST',
                        data: _data,
                        success: function (msg) {

                            $('.modal-body').html(msg);

                        }
                    });
                    break;

            }
        });

        //for multiple option
        $('.with_selected').change(function () {
            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');

            var checkedValues = $('input:checkbox:checked').map(function () {
                return $(this).data('id');
            }).get();

            var action = $('.with_selected').val();

            var form_data = {
                checked_items: checkedValues,
                action: action,
                ajax: 'with_selected_options'
            }


            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.message').html(msg);

                }
            });
            return false;

        });


    });


</script>






























