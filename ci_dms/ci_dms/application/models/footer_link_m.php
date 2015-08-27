<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/22/14
 * Time: 5:24 AM
 */
class Footer_link_m extends MY_Model
{
    public $_tablename = 'footer_links';
    public $_primary_key = 'id';
    public $_order_by = 'id';
    public $validate_link_add = array
    (

        array
        (
            'field' => 'footer_title',
            'label' => 'Footer title',
            'rules' => 'required|is_unique[footer_links.title]'
        ),
        array
        (
            'field' => 'footer_url',
            'label' => 'Footer url',
            'rules' => 'required|is_unique[footer_links.footer_link]'
        )


    );

    public $validate_link_edit = array
    (

        array
        (
            'field' => 'footer_title',
            'label' => 'Footer title',
            'rules' => 'required'
        ),
        array
        (
            'field' => 'footer_url',
            'label' => 'Footer url',
            'rules' => 'required'
        )


    );

    function __construct()
    {
        parent::__construct();


    }

    public function get_footer_link_info($passed_id='', $param='')
    {

        //if NO ID
        if($passed_id=='')
        {
            return NULL;
        }
        else
        {
            //get user info
            $query=$this->db->select()->from($this->_tablename)->where($this->_primary_key,$passed_id)->get();

            if($query->result_array())
            {
                foreach($query->result_array() as $row)
                {
                    //filter results
                    switch($param)
                    {
                        case 'title':
                            $result=$row['title'];
                            break;

                        case 'icon':
                            $result = $row['icon'];
                            break;

                        case 'dateupdated':
                            $result=$row['dateupdated'];
                            break;
                        case 'dateadded':
                            $result=$row['dateadded'];
                            break;


                        case 'description':
                            $result=$row['description'];
                            break;

                        case 'author':
                            $result=$this->user_m->get_user_info($user_id=$row['author'], $param='fullname');
                            break;
                        case 'trash':
                            $result=$row['trash'];
                            break;

                        case 'slug':
                            $result=$row['slug'];
                            break;

                        case 'image':
                            $result=$row['imageurl'];
                            break;
                        case 'logo':
                            $result=$row['imageurl'];
                            break;
                        default:
                            $result=$query->result_array();
                    }

                }

                return $result;
            }

        }
    }


    function do_upload_update($folder_name){



        $config['upload_path']='./uploads/'.$folder_name;//remember to create a folder called uploads in root folder

        $config['allowed_types']='gif|png|jpg|jpeg';

        //to prevent overly gigantic photos
        $config['max_size']='10000';//always in kilobytes
        $config['max_height']='130240';//aways in pixels
        $config['max_width']='10680';//aways in pixels
        $config['file_name'] = IMAGES_NAME;

        //load the library and passin configs
        $this->load->library('upload',$config);

        //to perform the upload
        $upload= $this->upload->do_upload();

        //if upload successfull
        if ($upload)
        {


            //fetch image data
            $image_data=$this->upload->data();

            //resize the image
            //configs to resize image
            $config['image_library']='gd2';
            $config['source_image']=$image_data['full_path'];
            $config['create_thumb']=TRUE;
            $config['maintain_ratio']=TRUE;
            $config['width']=150;//in px always
            $config['height']=150;


            $config['new_image']='./uploads/'.$folder_name;

            //load image library and attach configs to it
            $this->load->library('image_lib',$config);

            //tell the library ti resize
            $this->image_lib->resize();

            //do the photo insert
            $photo_data['imageurl']=$image_data['file_name'];



            $upload_data=array
            (
                'imageurl'          =>$image_data['file_name']
            );
            //delete previouse image
            if(get_footer_link_info_by_id($this->input->post('id'),'image'))//if there is an image
            {

                    unlink('uploads/footer_link_logos/'.get_thumbnail(get_footer_link_info_by_id($this->input->post('id'),'image')));
                    unlink('uploads/footer_link_logos/'.get_footer_link_info_by_id($this->input->post('id'),'image'));


            }



            $upload_file=$this->update($this->input->post('id'),$upload_data);

            if($upload_file)
            {
                return TRUE;
            }
            else
            {
                return false;
            }

        }
        else
        {

            return $this->upload->display_errors();
        }

    }






}