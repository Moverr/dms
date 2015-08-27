<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * controls tha administrators view
 */

class Admin_settings extends MY_admin_controller
{

    function __construct()
    {
        //load ci controller
        parent::__construct();
        $this->load->model('site_logo_m');

        //load user model

    }


    function index()
    {
        $data['main_content']='admin/settings/settings_home_v';
        $data['pagetitle']='Settings';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);

    }


    function logo_settings()
    {
        if (check_my_access('view_site_info')) {
            if ($this->input->post('ajax')) {



                $str = '';

                switch ($this->input->post('ajax')) {

                    case 'logo_dimensions':
                        //print_array($_POST);
                        $this->form_validation->set_rules($this->site_logo_m->validate_dimensions);

                        $str = '';

                        if ($this->form_validation->run() == FALSE) {
                            $str .= error_template(validation_errors());
                        } else {
                            $info = array(
                                'width' => $this->input->post('logo_width'),
                                'height' => $this->input->post('logo_height')
                            );
                            //check if thetre is info
                            $logo_info = $this->site_logo_m->get_all();
                            if (count($logo_info)) {
                                //then update based on id
                                foreach ($logo_info as $row) {
                                    if ($this->site_logo_m->update($row['id'], $info, 'You updated site logo info')) {
                                        $str .= success_template('Site logo dimensions have been successfully Updated');
                                    } else {
                                        $str .= info_template('No change was made');
                                    }

                                }
                            } else {
                                //insert
                                if ($this->site_logo_m->create($info, 'You updated the site logo info')) {
                                    $str .= success_template('Site logo dimensions have been successfully added');
                                }

                            }
                        }

                        echo $str;
                        break;
                }

                echo $str;


            }else{
                $data['main_content']='admin/settings/logo_home_v';
                $data['pagetitle']='Logo Settings';
                $data['logo_info'] = $this->site_logo_m->get_all();


                if ($this->input->post('upload')) {

                    //if a file is being uploaded
                    if ($_FILES AND $_FILES['userfile']['name']) {

                        //check if there is already a logo
                        if ($this->site_logo_m->get_all()) {
                            //delete it
                            foreach ($this->site_logo_m->get_all() as $row) {
                                unlink('uploads/site_logo/' . get_thumbnail($row['logo_name']));
                                unlink('uploads/site_logo/' . $row['logo_name']);
                            }
                        }
                        $image_name = $this->site_logo_m->do_upload('site_logo');
                        // Upload the file
                        if (!$this->upload->display_errors()) {

                            //save file name
                            $image_data = array
                            (
                                'logo_name' => $image_name

                            );
                            //print_array($_POST);

                            //check if there is already a logo
                            if ($data['logo_info']) {
                                //do update
                                foreach ($this->site_logo_m->get_all() as $row) {
                                    //save file info
                                    if ($this->site_logo_m->update($row['id'], $image_data, 'updated site logo ')) {
                                        $data['success'] = 'Site logo successfully updated <a class="btn btn-success btn-sx" href="' . current_url() . '">Refresh</a>';

                                    } else {
                                        $data['errors'] = 'File was not saved. Please try again';
                                    }
                                }
                            } else {
                                //save file info
                                if ($this->site_logo_m->create($image_data, 'updated site logo ')) {
                                    $data['success'] = 'Site logo successfully updated  <a class="btn btn-success btn-xs" href="' . current_url() . '">Refresh</a>';

                                } else {
                                    $data['errors'] = 'File was not saved. Please try again';
                                }
                            }


                        } else {
                            $data['errors'] = $this->upload->display_errors();
                        }

                    } else {
                        $data['errors'] = 'Upload an image';
                    }

                }


                //load the admin dashboard view
                $this->load->view('admin/includes/admin_template',$data);
            }
        }else{
            load_access_denied_page();
        }



    }


    function social_media()
    {
        $data['main_content']='admin/settings/social_media_home_v';
        $data['pagetitle']='Social media settings';


        //load the admin dashboard view
        $this->load->view('admin/includes/admin_template',$data);

    }

}
