<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/30/14
 * Time: 12:41 PM
 */
?>
<?php
/*
#Author: Cengkuru Micheal
9/2/14
10:49 AM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<div style="margin-left: 24px;" class="card ">

    <div class="card-body text-default-light">

        <div class="text-divider hidden-md hidden-lg"><span>Email</span></div>
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary"
               href="<?= base_url() . $this->uri->segment(1) . '/admin_sitemail' ?>"><i class="md md-list"></i></a>
        </p>
        <?php
        foreach($mail_details as $row){
            $subject=$row['subject'];
            $sender=$row['sender_name'];
            $send_date=custom_date_format('d / F / Y',$row['dateadded']);
            $content=html_entity_decode($row['content']);
        }
        ?>
        <h1 class="no-margin"><?=ucwords($subject)?></h1>
        <div class="btn-group stick-top-right">

            <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/reply/' . $this->uri->segment(4) ?>" class="btn btn-icon-toggle btn-default"><i class="md md-reply"></i></a>
        </div>
        <span class="pull-right text-default-light"><?=$send_date?></span>
        <strong><?=$sender?></strong>
        <hr/>
        <?=$content?>


    </div><!--end .card-body -->
</div>


