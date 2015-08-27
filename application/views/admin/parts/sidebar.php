<div class="page-sidebar">
    <!-- START X-NAVIGATION -->

    <img width="<?= get_site_logo_info('width')?>" height="<?= get_site_logo_info('height')?>"
         src="<?= base_url() ?>uploads/site_logo/<?= get_site_logo_info('image')?>" data-src="#" alt="">

<?php
//switch depending on the first segment
switch($this->uri->segment(2)){
    //case of dashboard
    case 'dashboard':
        //load the dashboard module sidebar links
        $this->load->view('admin/parts/module_sidebars/dashboard_sidebar_v');
        break;
    //case of admin_settings
    case 'admin_settings':
        //load the dashboard module sidebar links
        $this->load->view('admin/parts/module_sidebars/settings_sidebar_v');
        break;
    //case of users
    case 'admin_users':
        //load the dashboard module sidebar links
        $this->load->view('admin/parts/module_sidebars/users_sidebar_v');
        break;
    //case of usergroupd
    case 'admin_usergroups':
        //load the dashboard module sidebar links
        $this->load->view('admin/parts/module_sidebars/usergroup_sidebar_v');
        break;

    //case of usergroupd
    case 'admin_pages':
        //load the dashboard module sidebar links
        $this->load->view('admin/parts/module_sidebars/pages_sidebar_v');
        break;
    //if no or wrong segment passed
    default:
        $this->load->view('admin/parts/module_sidebars/dashboard_sidebar_v');
}
?>
<!-- END X-NAVIGATION -->
</div>