<div class="card">

    <div class="card-body text-default-light">
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary"
                                       href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2)?>"><i class="md md-list"></i></a>
        </p>
        <?= $this->load->view('admin/files/forms/edit_file_f') ?>
    </div><!--end .card-body -->
</div>
