<div class="card">

    <div class="card-body text-default-light">
        <?php
        $form_atr = array
        (

            'class' => 'form-horizontal row-border'
        );
        echo form_open(current_url(), $form_atr);
        ?>

        <div class="form-group">
            <label class="col-sm-3 control-label"></label>

            <div class="col-sm-9">

                <?php

                //print_array(get_profile_info());

                switch (get_file_info_by_id($id, 'file_type_id')) {
                    //case of images
                    case '1':
                        ?>
                        <a href="<?= base_url() . 'uploads/files/' . get_file_info_by_id($id, 'fileurl') ?>"
                           class="fancybox" title="<?= get_file_info_by_id($id, 'description') ?>">
                            <img width="64px" height="64px" class="img-circle "
                                 src="<?= base_url() . 'uploads/files/' . get_thumbnail(get_file_info_by_id($id, 'fileurl')) ?>">
                        </a>

                        <?php
                        break;
                    //videos
                    case '2':
                        ?>
                        <a target="_blank" href="<?= get_file_info_by_id($id, 'fileurl') ?>">See video</a>
                        <?php
                        break;
                    //others
                    case '3':
                        ?>
                        <a href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/download/' . get_file_info_by_id($id, 'fileurl') ?>"><i
                                class="fa fa-download"></i> <?= get_file_info_by_id($id, 'fileurl') ?>
                        </a>
                        <?php
                        break;
                }
                ?>


            </div>
        </div>

        <div class="form-group">
            <label for="category" class="col-sm-3 control-label">Share with</label>

            <div class="col-sm-6">

                <select required="" name="category" id="category" style="width:100%" class="populate">
                    <optgroup label="Available options">
                        <option value="users">Users</option>
                        <option value="blog">Blog article</option>
                        <option value="news">News Article</option>
                        <option value="knowledge_base">Knowledge base</option>
                        <option value="FAQ">FAQ</option>
                        <option value="careers">Career</option>
                        <option value="organigram">Organigram</option>
                    </optgroup>
                </select>
            </div>

        </div>

        <div style="margin-bottom: 10px;" class="category_extra_fields">
            <div style="display: none;" class="form-group category_users">
                <label for="category" class="col-sm-3 control-label">Users</label>

                <div class="col-sm-6">

                    <select required="" multiple="" name="users[]" id="users" style="width:100%" class="populate">
                        <optgroup label="Available users">
                            <?php
                            foreach (get_active_users() as $row) {
                                ?>
                                <option value="<?= $row['email'] ?>"><?= $row['fname'] . ' ' . $row['lname'] ?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>

            </div>

            <div style="display: none;" class="form-group category_careers">
                <label for="category_careers" class="col-sm-3 control-label">Careers</label>

                <div class="col-sm-6">

                    <select required="" multiple="" name="careers[]" id="careers" style="width:100%" class="populate">
                        <optgroup label="Available careers">
                            <?php
                            foreach (get_active_careers() as $row) {
                                ?>
                                <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                            <?php
                            }
                            ?>
                        </optgroup>
                    </select>
                </div>

            </div>
        </div>


        <div style="display: none;" class="form-group share_text">
            <label class="col-sm-3 control-label">Message</label>

            <div class="col-sm-6">
                <textarea name="content" id="share_message" class="form-control "></textarea>


            </div>
        </div>


        <div class="form-group">
            <label for="category" class="col-sm-3 control-label"></label>

            <div class="col-sm-9">

                <input type="submit" class="btn btn-primary" id="share" name="create" value="share"/>


            </div>
        </div>


        </form>
        <div class="message">
        </div>

    </div><!--end .card-body -->
</div>

<script>
    $(document).ready(function () {
        //$('.category_param').hide();
        if ($("#category").val() == 'users') {
            $(".category_users").show('slow');
            $(".share_text").show('slow');
        }

        $('.populate').select2();

        $('#category').change(function () {
            $(".category_extra_fields").show('slow');

            if ($("#category").val() == 'users') {

                $(".share_text").show('slow');
            }
            else {
                $(".share_text").hide('slow');
            }


            switch ($("#category").val()) {
                case 'users':
                    $(".category_users").show('slow');
                    $(".share_text").show('slow');
                    $(".category_careers").hide('slow');

                    break;
                case 'careers':
                    $(".category_careers").show('slow');
                    $(".category_users").hide('slow');


                    break;
                default :
                    $(".category_extra_fields").hide('slow');


            }

            var category = $("#category").val();
            //alert(category);

            var form_data =
            {
                category: category,
                ajax: 'get_category_extra_fields'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.category_param').html(msg);

                }
            });


        });

        $('#share').click(function () {

            //loading gif
            $(".message").html('<img src="<?=base_url()?>images/loading.gif" /> Now loading...');


            var users = $('#users').val();
            var careers = $('#careers').val();
            var share_message = $('#share_message').val();
            var file_id = '<?=$id?>';

            var form_data =
            {
                users: users,
                'careers': careers,
                share_message: share_message,
                file_id: file_id,
                ajax: 'share_file'
            };

            $.ajax({
                url: "<?php echo site_url($this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3)) ?>",
                type: 'POST',
                data: form_data,
                success: function (msg) {

                    $('.message').html(msg);

                }
            });


            return false;

        });
    });
</script>


