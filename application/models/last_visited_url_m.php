<?php

/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/22/14
 * Time: 5:24 AM
 */
class Last_visited_url_m extends MY_Model
{
    public $_tablename = 'site_last_visited_url';
    public $_primary_key = 'id';
    public $_order_by = 'id';

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->update_last_visited_page($this->session->userdata('user_id'), current_url());
    }

    //get users last visited url

    function update_last_visited_page($user_id, $current_url)
    {
        //do this only if a user id is passed
        if ($user_id) {
            //do not update on log out or for last downloaded urls
            if ($this->uri->segment(2) <> 'login') {
                //third segment excludes
                $third_seg_excludes = array(
                    'download',
                    'ajax_calls',
                    'img'
                );
                if (!in_array($this->uri->segment(3), $third_seg_excludes)) {
                    //do not remember for home page
                    if ($this->uri->segment(1) == 'admin') {
                        //if it's the first time, do insert
                        $where = array(
                            'user_id' => $user_id
                        );
                        $result = $this->get_where($where);
                        if ($result) {
                            $userdata = array(
                                'url' => $current_url
                            );

                            $this->update_by('user_id', $user_id, $userdata, '', 'n');
                        } else {
                            $userdata = array(
                                'user_id' => $user_id,
                                'url' => $current_url
                            );

                            $this->create($userdata);
                        }
                    }
                }


            }

        }


    }

    //auto update last visited page by user

    function get_last_url_by_user($user_id)
    {
        $str = '';
        $where = array(
            'user_id' => $user_id
        );
        $result = $this->get_where($where);

        //if there is a url entry
        if (count($result)) {

            foreach ($result as $row) {
                $url = $row['url'];
            }

            $str .= $url;
        } else {
            //if its users first time insert them in to table
            $userdata = array(
                'user_id' => $user_id,
                'url' => base_url() . 'admin/dashboard'
            );

            //save info
            $this->create($userdata);

            $str .= base_url() . 'admin/dashboard';


        }

        return $str;

    }


}
//todo a table to log all pages ever visited by the user