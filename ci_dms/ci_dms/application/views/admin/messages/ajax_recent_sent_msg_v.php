<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 4/10/2015
 * Time: 9:30 PM
 */
//print_array($results);
?>
<div class="messages messages-img">
    <?php
    foreach ($results as $result) {
        ?>
        <div class="item in item-visible">
            <div class="image">
                <i class="fa fa-comment 4x"> me</i>
            </div>
            <div class="text">
                <div class="heading">
                    <a href="#"><?= get_user_info_by_id($result['sender_id'], 'fullname') ?></a>
                    <span class="date"><?= time_ago($result['dateadded']) ?></span>
                </div>
                <?= $result['content'] ?>
                <br>
                <small style="color: #CCC">Unseen</small>
            </div>
        </div>
    <?php
    }
    ?>


</div>