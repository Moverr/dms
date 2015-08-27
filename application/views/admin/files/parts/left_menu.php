<div class="panel panel-default">

    <div class="panel-body list-group border-bottom">

        <a href="#" class="list-group-item active"><span class="fa fa-bar-chart-o"></span> Manage</a>
        <?php
        //if user has permission
        if (check_my_access('view_files')) {
            ?>
            <a href="<?= base_url() . $this->uri->segment(1) . '/admin_files' ?>" class="list-group-item"><span
                    class="fa fa-cog"></span>All files</a>
        <?php

        }

        ?>


        <?php
        //if user has permission
        if (check_my_access('view_file_types')) {
            ?>
            <a href="<?= base_url() . $this->uri->segment(1) . '/admin_file_types' ?>" class="list-group-item"><span
                    class="fa fa-photo"></span>File types</a>
        <?php

        }

        ?>


        <?php
        //if user has permission
        if (check_my_access('view_file_categories')) {
            ?>
            <a href="<?= base_url() . $this->uri->segment(1) . '/admin_file_categories' ?>" class="list-group-item"><span
                    class="fa fa-meh-o"></span> File Categories</a>
        <?php

        }

        ?>



        <?php
        //if user has permission
        if (check_my_access('add_files')) {
            ?>
            <a href="<?= base_url() . $this->uri->segment(1) . '/admin_files/add' ?>" class="list-group-item"><span
                    class="fa fa-plus"></span> Add file</a>
        <?php

        }

        ?>


    </div>
</div>