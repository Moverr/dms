<?php
/*
#Author: Cengkuru Micheal
9/2/14
10:49 AM
*/
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<?php
if (!$policies) {
    echo info_template('No privacy policy created yet <a class="btn btn-xs btn-primary" href="' . base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/add_policy">Create</a>');
} else {
    foreach ($policies as $policy) {
        ?>
        <p>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                Actions
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/edit_policy' ?>">Edit privacy policy</a></li>
              </ul>
            </div>
        </p>
<?php
        echo html_entity_decode($policy['content']);
    }
}
?>




