<?php
/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/30/14
 * Time: 9:34 AM
 */
class Site_mail_m extends  MY_Model
{
    //defaults

    public $_tablename='site_mail';
    public  $_primary_key='id';

    public $validate_mail=array
    (
        array
        (
            'field'   => 'usr_name',
            'label'   => 'Your name',
            'rules'   => 'trim|required'
        ),
        array
        (
            'field'   => 'usr_email',
            'label'   => 'Email',
            'rules'   =>'trim|required|valid_email'
        ),
        array(
            'field'   => 'usr_msg',
            'label'   => 'Your message',
            'rules'   => 'trim|required'
        ),
    );

    public $validate_send_mail=array
    (

        array
        (
            'field'   => 'to',
            'label'   => 'Recipient',
            'rules'   =>'trim|required|valid_email'
        ),

    );

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_info($id,$param)
    {
        if(!$id)
        {
           return NULL;
        }
        else
        {
            foreach($this->get_by_id($id) as $row)
            {
                switch($param)
                {
                    case 'to':
                        $result=$row['to'];
                        break;
                    case 'from':
                        $result=$row['from'];
                        break;
                    case 'sender_name':
                        $result=$row['sender_name'];
                        break;
                    case 'content':
                        $result=$row['content'];
                        break;
                    case 'dateadded':
                        $result=$row['dateadded'];
                        break;
                    case 'attachments':
                        $result=$row['attachments'];
                        break;
                    case 'subject':
                        $result=$row['subject'];
                        break;
                    case 'status':
                        $result=$row['status'];
                        break;
                    default:
                        $result=$this->get_by_id($id);

                }

                return $result;

            }
        }
    }

    function get_inbox()
    {
        $query=$this->db->select()->from($this->_tablename)->not_like('from',SITE_EMAIL)->order_by('id','DESC')->get();

        return $query->result_array();
    }
    function get_outbox()
    {
        $query=$this->db->select()->from($this->_tablename)->like('from',$this->config->item('site_email'))->get();

        return $query->result_array();
    }


    function get_unread()
    {
        $query=$this->db->select()->from($this->_tablename)->not_like('from',$this->config->item('site_email'))->where('status','u')->get();

        return $query->result_array();
    }

    //get paginated
    public function get_paginated_inbox($num=20,$start)
    {
        //build query
        $q=$this->db->select()->from($this->_tablename)->limit($num,$start)->not_like('from',$this->config->item('site_email'))->order_by($this->_primary_key,'DESC')->get();
        //echo $this->db->last_query();

        //return result
        return $q->result_array();

    }

    public function get_paginated_outbox($num=20,$start)
    {
        //build query
        $q=$this->db->select()->from($this->_tablename)->limit($num,$start)->like('from',$this->config->item('site_email'))->order_by($this->_primary_key,'DESC')->get();
        //echo $this->db->last_query();

        //return result
        return $q->result_array();

    }

    function do_file_upload($folder_name)
    {



        $config['upload_path']='./uploads/'.$folder_name;//remember to create a folder called uploads in root folder

        $config['allowed_types']='csv|xls|xlsx|gif|png|jpg|jpeg|doc|docx';

        //to prevent overly gigantic photos
        $config['max_size']='10000';//always in kilobytes
        $config['max_height']='130240';//aways in pixels
        $config['max_width']='10680';//aways in pixels


        //load the library and passin configs
        $this->load->library('upload',$config);

        //to perform the upload
        $upload= $this->upload->do_upload();

        //if upload successfull
        if ($upload)
        { //fetch image data
            $image_data=$this->upload->data();

            //echo $image_data['full_path'];
            return $image_data['full_path'];
        }
        else
        {

            return $this->upload->display_errors();
        }

    }


}