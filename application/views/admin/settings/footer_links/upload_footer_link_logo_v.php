<div class="card">

    <div class="card-body text-default-light">
        <p>
            <a class="btn ink-reaction btn-floating-action btn-primary"
               href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/footer_links'?>"><i class="md md-list"></i></a>
        </p>
        <?=$this->load->view('admin/settings/footer_links/forms/footer_link_logo_f')?>
    </div><!--end .card-body -->
</div>

