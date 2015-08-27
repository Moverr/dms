<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 4/10/2015
 * Time: 5:31 PM
 */

if ($users) {
    ?>
    <div class="row">
        <?php
        foreach ($users as $user) {
            ?>
            <div class="col-md-3">
                <!-- CONTACT ITEM -->
                <div class="panel panel-default">
                    <div class="panel-body profile">
                        <div class="profile-image">
                            <img src="<?= base_url() ?>uploads/avatars/<?= $user['avatar'] ?>" alt="Nadia Ali">
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name"><?= $user['fname'] . ' ' . $user['lname'] ?></div>
                        </div>

                    </div>
                    <div class="panel-body">
                        <div class="contact-info">
                            <p><a class="btn btn-sm btn-danger"
                                  href="<?= base_url() . $this->uri->segment(1) . '/message_board/send_message/' . encryptValue($user['id']) ?>">Send
                                    message</a></p>

                        </div>
                    </div>
                </div>
                <!-- END CONTACT ITEM -->
            </div>
        <?php
        }
        ?>

    </div>
<?php

} else {
    echo info_template('No matches found');
}