<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/20/14
 * Time: 3:04 PM
 *
 * controls notifications CRUD
 */

class Notification_m extends MY_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public $_tablename='users_notifications';
    public $_primary_key='id';

    //mark as seen
    public function mark_as_seen($msg_id)
    {
        $data=array
        (
            'seen'=>'y'
        );
        $this->update($msg_id, $data);

    }

    //get unseen notifications
    public function get_unseen_messages()
    {
        $where = array
        (
            'user_id'   =>$this->session->userdata('user_id'),
            'seen'      =>'n',
            'trash'     =>'n'
        );

        return $this->get_where($where);
    }

    //generate user notifications
    public  function generate_notification($user_id,$notification,$alerttype)
    {
        $msg_data=array
        (
            'user_id'=>$user_id,
            'notification'=>$notification,
            'alerttype'=>$alerttype
        );

        return $this->create($msg_data);

    }

    public function prevent_duplicate_msg($user_id,$notification)
    {
        $where = array
        (
            'user_id'   =>$user_id,
            'notification'=>$notification,
            'seen'      =>'n',
            'trash'     =>'n'
        );

        return $this->get_where($where);
    }

    public function clear_notification($user_id,$notification)
    {
        $where = array
        (
            'user_id'   =>$user_id,
            'notification'=>$notification,
            'seen'      =>'n',
            'trash'     =>'n'
        );

        foreach($this->get_where($where) as $row)
        {
            $data = array
            (

                'seen'      =>'y',
                'trash'     =>'y'
            );

            $this->update($row['id'],$data);
        }

        return TRUE;

    }

}