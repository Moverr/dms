<?php
class Permission_group_m extends MY_Model
{
    public $_tablename='permission_groups';
    public  $_primary_key='id';
    function __construct()
    {
        parent::__construct();
        $this->update_slugs();
        $this->load->model('user_m');

    }

    public  $add_permission_group_vallidation=array
    (

        array
        (
            'field'   => 'permission_group',
            'label'   => 'Permission group',
            'rules'   => 'required|is_unique[permission_groups.title]'
        ),



    );


    //get permission
    function get_permission_group_info($id='',$param='')
    {
        //if an id is passed
        if($id!='')
        {
            $data=array
            (
                'id'=>$id
            );
            $query=$this->db->select()->from($this->_tablename)->where($data)->get();
        }
        else
        {
            $query=$this->db->select()->from($this->_tablename)->get();
        }
        if($query->result_array())
        {
            foreach($query->result_array() as $row)
            {
                switch($param)
                {

                    case 'title':
                        $result=$row['title'];
                        break;
                    case 'trash':
                        $result=$row['trash'];
                        break;
                    case 'dateadded':
                        $result=$row['dateadded'];
                        break;

                    case 'dateupdated':
                        $result=$row['dateupdated'];
                        break;
                    case 'author':
                        $result=$this->user_m->get_user_info($row['author'],'fullname');
                        break;
                    default:
                        $result=$query->result_array();
                }
            }

            return $result;
        }
        else
        {
           return NULL;
        }

    }



}
 