<?php
/*
#Author: Cengkuru Micheal
9/2/14
10:49 AM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-title">
            <h2><i class="fa fa-photo"></i> <?= $pagetitle ?></h2>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading ui-draggable-handle">
                <h3 class="panel-title">Listing <span class="badge badge-info"><?= '0' ?></span></h3>
            </div>
            <div class="panel-body">

                <!--                code here-->
                <?php
                //display register form
                $this->load->view('admin/user_types/confirm_delete_usertype_f');
                ?>












                <!--                end code-->

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


<!--end jquery-->



