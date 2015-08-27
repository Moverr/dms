<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/30/14
 * Time: 12:41 PM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/17/14
 * Time: 12:15 PM
 */
?>

<div class="card">

    <div class="card-body text-default-light">
        <div class="block">
            <p>
                <a class="btn ink-reaction btn-floating-action btn-primary"
                                           href="<?= base_url() . $this->uri->segment(1) . '/admin_sitemail' ?>"><i class="md md-list"></i></a>
            </p>
            <!--                code here-->
            <b>From:</b> <?=get_site_mail_info(decryptValue($this->uri->segment(4)),'sender_name')?><br>
            <b>Email:</b> <?=get_site_mail_info(decryptValue($this->uri->segment(4)),'from')?><br>
            <b>Date:</b> <?=get_site_mail_info(decryptValue($this->uri->segment(4)),'dateadded')?>
            <hr>
            <div class="row">
                <p>Message</p>
                <?=get_site_mail_info(decryptValue($this->uri->segment(4)),'content')?>
            </div>
            <hr>
            <?=$this->load->view('admin/mail/forms/reply_mail_f')?>



        </div>

    </div><!--end .card-body -->
</div>





