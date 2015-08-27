<?php

/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/22/14
 * Time: 5:24 AM
 */
class Message_m extends MY_Model
{
    public $_tablename = 'messages';
    public $_primary_key = 'id';
    public $_order_by = 'id';

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');

    }

    public function get_message_info($passed_id = '', $param = '')
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
                        case 'sender_id':
                            $result = $row['sender_id'];
                            break;
                        case 'sender':
                            $result = get_user_info_by_id($row['sender_id'], 'fullname');
                            break;

                        case 'reciepient_id':
                            $result = $row['reciepient_id'];
                            break;
                        case 'reciepient':
                            $result = get_user_info_by_id($row['reciepient_id'], 'fullname');
                            break;

                        case 'dateseen':
                            $result = $row['dateseen'];
                            break;
                        case 'dateadded':
                            $result = $row['dateadded'];
                            break;


                        case 'content':
                            $result = $row['content'];
                            break;

                        case 'view_status':
                            $result = $row['view_status'];
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