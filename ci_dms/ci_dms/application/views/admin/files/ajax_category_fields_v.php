<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 4/21/2015
 * Time: 8:29 PM
 */
//switch by category
switch ($category) {
    //case of users
    case 'users':
        ?>
        <div class="category_param">
            <div class="form-group">
                <label for="category" class="col-sm-3 control-label">Users</label>

                <div class="col-sm-6">

                    <select required="" name="category" id="category" style="width:100%" class="populate">
                        <optgroup label="Available users">
                            <?php
                            foreach (get_active_users() as $row) {
                                ?>
                                <option value="<?= $row['id'] ?>"><?= $row['fname'] . ' ' . $row['lname'] ?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>

            </div>
        </div>

        <?php
        break;
}
?>


