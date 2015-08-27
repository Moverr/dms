<?php

/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/30/14
 * Time: 9:34 AM
 */
class Site_logo_m extends MY_Model
{
    //defaults

    public $_tablename = 'site_logo';
    public $_primary_key = 'id';
    public $validate_dimensions = array
    (

        array
        (
            'field' => 'logo_width',
            'label' => 'Logo width',
            'rules' => 'trim|required|numeric'
        ),
        array
        (
            'field' => 'logo_height',
            'label' => 'Logo height',
            'rules' => 'trim|required|numeric'
        )

    );

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_info($field)
    {
        foreach ($this->get_all() as $row) {
            switch ($field) {
                case 'width':
                    $result = $row['width'];
                    break;
                case 'title':
                    $result = $row['logo_name'];
                    break;
                case 'image':
                    $result = $row['logo_name'];
                    break;
                case 'logo':
                    $result = $row['logo_name'];
                    break;
                case 'height':
                    $result = $row['height'];
                    break;
                default:
                    $result = $this->get_all();

            }

            return $result;

        }
    }


    function do_upload($folder_name)
    {


        $config['upload_path'] = './uploads/' . $folder_name;//remember to create a folder called uploads in root folder

        $config['allowed_types'] = 'gif|png|jpg|jpeg';

        //to prevent overly gigantic photos
        $config['max_size'] = '10000';//always in kilobytes
        $config['max_height'] = '130240';//aways in pixels
        $config['max_width'] = '10680';//aways in pixels

        //load the library and passin configs
        $this->load->library('upload', $config);

        //to perform the upload
        $upload = $this->upload->do_upload();

        //if upload successfull
        if ($upload) {


            //fetch image data
            $image_data = $this->upload->data();

            //resize the image
            //configs to resize image
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 150;//in px always
            $config['height'] = 150;


            $config['new_image'] = './uploads/' . $folder_name;

            //load image library and attach configs to it
            $this->load->library('image_lib', $config);

            //tell the library ti resize
            $this->image_lib->resize();

            //do the photo insert
            $photo_data['imageurl'] = $image_data['file_name'];

            return $image_data['file_name'];
            //echo $this->db->last_query();
            //print_array($_POST);


        } else {

            return $this->upload->display_errors();
        }

    }


}