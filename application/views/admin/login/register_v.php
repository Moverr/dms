<div class="login-box animated fadeInDown">
    <h1 style="color: #fff;" class="text-center"><?= $this->config->item('site_name') ?></h1>

    <div class="login-body">
        <div class="login-title"><strong>Welcome</strong>, User registration</div>
        <?= $this->load->view('admin/login/forms/register_f') ?>
    </div>
    <div class="login-footer">
        <div class="pull-left">
            &copy; <?= date('Y') . ' ' . $this->config->item('site_name') ?>
        </div>

    </div>
</div>