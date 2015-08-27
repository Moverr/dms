<?php

if ($all_my_messages) {


    ?>
    <div class="messages messages-img">
        <?php
        foreach ($all_my_messages_paginated as $message) {
            ?>
            <div class="item item-visible">
                <div class="image">
                    <img
                        src="<?= base_url() . 'uploads/avatars/' . get_user_info_by_id($message['sender_id'], 'avatar') ?>"
                        alt="<?= get_user_info_by_id($message['sender_id'], 'fullname') ?>">
                </div>
                <div class="text">
                    <div class="heading">
                        <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/send_message/' . encryptValue($message['sender_id']) . '/reply/' . encryptValue($message['sender_id']) ?>"><?= get_user_info_by_id($message['sender_id'], 'fullname') ?></a>
                        <span class="date"> <?= time_ago($message['dateadded']) ?></span>
                    </div>
                    <?= $message['content'] ?>
                </div>
            </div>


        <?php
        }
        ?>
            </div>
<?php

} else {
    echo info_template('You have no new messages');

    ?>
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <p>Use search to find a user </p>
                <?= $this->load->view('admin/messages/forms/search_users_f') ?>

            </div>
                </div>

        <div class="row">
            <div class="message">

            </div>
                </div>

            </div>

<?php
}
?>




