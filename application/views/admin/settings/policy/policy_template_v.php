<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 11/2/14
 * Time: 9:59 AM
 */
?>


<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> <?= $pagetitle ?></h2>
</div>

<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-body">
                    <?= $this->load->view($sub_view) ?>
                </div>
            </div>

        </div>
    </div>

</div>



