<div class="panel panel-default">

    <div class="panel-body list-group border-bottom">
        <a href="#" class="list-group-item active"><span class="fa fa-bar-chart-o"></span> Manage</a>
        <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/avatar/'.$this->uri->segment(4)?>" class="list-group-item"><span class="fa fa-photo"></span> New gr</a>
        <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/basic_info/'.$this->uri->segment(4)?>" class="list-group-item"><span class="fa fa-meh-o"></span> User info </a>

        <a href="<?=base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/account/'.$this->uri->segment(4)?>" class="list-group-item"><span class="fa fa-cog"></span> Account</a>
        <a href="#" class="list-group-item"><span class="fa fa-coffee"></span> Activity log <span class="label label-danger">in progress</span></a>
    </div>
</div>
