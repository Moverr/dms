<?php

/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 25/06/14
 * Time: 10:17
 */
class Privacy_policy_m extends MY_Model
{
    public $_tablename = 'privacy_policy';
    public $_primary_key = 'id';
    public $validate_policy = array
    (

        array
        (
            'field' => 'content',
            'label' => 'Content',
            'rules' => 'required'
        )

    );


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_policy_info($passed_id = '', $param = '')
    {

        //if NO ID
        if ($passed_id == '') {
            return NULL;
        } else {
            //get user info
            $query = $this->db->select()->from($this->_tablename)->where($this->_primary_key, $passed_id)->get();

            if ($query->result_array()) {
                foreach ($query->result_array() as $row) {
                    //filter results
                    switch ($param) {
                        case 'content':
                            $result = $row['content'];
                            break;


                        case 'dateupdated':
                            $result = $row['dateupdated'];
                            break;
                        case 'dateadded':
                            $result = $row['dateadded'];
                            break;

                        case 'author':
                            $result = $this->user_m->get_user_info($user_id = $row['author'], $param = 'fullname');
                            break;

                        case 'trash':
                            $result = $row['trash'];
                            break;

                        case 'slug':
                            $result = $row['slug'];
                            break;
                        default:
                            $result = $query->result_array();
                    }

                }

                return $result;
            }

        }
    }


}