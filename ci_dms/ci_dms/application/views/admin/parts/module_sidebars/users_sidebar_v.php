
<ul class="x-navigation">
    <li class="">

    </li>

    <!--        dashboard-->
    <li class="active">
        <a href="<?= base_url() . $this->uri->segment(1) . '/admin_users/profile' ?>"><span class="fa fa-list"></span>
            <span class="xn-text">My Profile</span></a>
    </li>





    <li >
        <a href="<?= base_url() . $this->uri->segment(1) . '/admin_users/admin_users'?>"><span class="fa fa-photo"></span> <span class="xn-text">Every one</span></a>

    </li>
    <hr>
    <li >
        <a href="<?= base_url() . $this->uri->segment(1) . '/admin_users/user_logs'?>"><span class="fa fa-link"></span> <span class="xn-text">User Logs</span></a>

    </li>




</ul>