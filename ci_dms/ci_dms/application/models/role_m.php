<?php
class Role_m extends MY_Model
{
    public $_tablename='roles';
    public $_primary_key='id';
    function __construct()
    {
        parent::__construct();


    }


    //get roles of currently logged in user
    function get_my_roles()
    {

        $where=array(
            'userid'=>$this->session->userdata('userid'),
            'isactive'=>'Y'
        );
        $result_set=$this->get_where($where);


        if($result_set)
        {
            //array to hold the groups
            $groups=array();
            foreach($result_set as $row)
            {
                //insert group into array
                $groups[]=$row['groupid'];
            }

            //print_array($groups);

            //return groups
            return $groups;

        }
        else
        {
            return FALSE;
        }

    }

}
 