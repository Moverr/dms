<?php
/*
#Author: Cengkuru Micheal
9/2/14
10:49 AM
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>

<?php
if(count($all_mails)){
    ?>
    <div class="card col-md-5">
        <div class="card-body height-12 scroll style-default-bright">
            <div class="list-group list-email list-gray">
                <?php
                $i=0;
                foreach($all_mails as $mail){
                    $i++;
                    if($i>1){
                        ?>
                        <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>/view_mail/<?=encryptValue($mail['id'])?>" class="list-group-item">
                            <h5><?=$mail['from']?></h5>

                            <p class="hidden-xs hidden-sm"><?=trim_text($mail['content'],100)?></p>
                            <div style="margin: -10px;" class="stick-top-right small-padding text-default-light text-sm"><?=custom_date_format('d / F / Y',$mail['dateadded'])?></div>

                        </a>
                    <?php
                    }

                }
                ?>


            </div><!--end .list-group -->

        </div>



    </div>
<?php
}
?>



<div style="margin-left: 24px;" class="card <?=count($all_mails)>0?'col-md-6':'col-md-12'?> ">

    <div class="card-body text-default-light">

        <div class="text-divider hidden-md hidden-lg"><span>Email</span></div>
        <?php
        if(count(($all_mails))){
            foreach(array_slice($all_mails,0,1) as $row){
                $id=encryptValue($row['id']);
                $subject=$row['subject'];
                $sender=$row['sender_name'];
                $send_date=custom_date_format('d / F / Y',$row['dateadded']);
                $content=html_entity_decode($row['content']);
            }

            ?>
            <h1 class="no-margin"><?=ucwords($subject)?></h1>
            <div class="btn-group stick-top-right">
                <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/reply/' . $id ?>" class="btn btn-icon-toggle btn-default"><i class="md md-reply"></i></a>
            </div>
            <span class="pull-right text-default-light"><?=$send_date?></span>
            <strong><?=$sender?></strong>
            <hr/>
            <?=$content?>
        <?php

        }else{
            echo info_template('Inbox Empty');
        }

        ?>



    </div><!--end .card-body -->
</div>


