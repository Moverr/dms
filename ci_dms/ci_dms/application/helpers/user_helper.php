<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 24/05/14
 * Time: 14:01
 */



function get_user_info_by_id($id='',$param='')
{
    $ci=& get_instance();
    $ci->load->model('user_m');

    return $ci->user_m->get_user_info($id, $param);
}

function logged_in_user($param)
{
    $ci=& get_instance();
    switch($param)
    {
        //get id
        case 'id':
            $result=$ci->session->userdata('logged_in_user_id');
            break;

        //get firstname
        case 'firstname':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'firstname');
            break;

        //get lastname
        case 'lastname':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'lastname');
            break;

        //get fullname
        case 'fullname':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'firstname').' '.get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'lastname');
            break;

        //get email
        case 'email':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'email');
            break;

        //get usertype
        case 'usertype':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'user_type');
            break;
        case 'usertype_id':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'usertype_id');
            break;

        //get avatar
        case 'avatar':
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'avatar');
            break;

        default:
            $result=get_user_info_by_id($ci->session->userdata('logged_in_user_id'),'');
    }

    return $result;
}



function get_active_users()
{
    $ci=& get_instance();
    $ci->load->model('user_m');
    $where=

        array
        (
            'trash' =>'n'
        );

    return $ci->user_m->get_where($where);
}

function get_count_active_users()
{
    $ci =& get_instance();
    $ci->load->model('user_m');
    return $ci->user_m->get_count_active_users();
}

function get_deactivated_users()
{
    $ci=& get_instance();
    $ci->load->model('user_m');
    $where=

        array
        (
            'trash' =>'y'
        );

    return $ci->user_m->get_where($where);
}


function get_users_by_usertype($usertype_id)
{
    $ci=& get_instance();
    $ci->load->model('user_m');
    $where=

        array
        (
            'usertype'      =>$usertype_id,
            'trash'         =>'n'
        );

    return $ci->user_m->get_where($where);
}

function logged_in_user_permissions()
{
    $ci=& get_instance();
    $roles=array();
    $usertype= $ci->session->userdata('logged_in_usertype');
    foreach(get_roles_by_usertype($usertype) as $permission)
    {
        $roles[]=$permission['permission'];
    }
    return $roles;
}

function check_duplicate_email($email,$user_id)
{
    $ci=& get_instance();
    $ci->load->model('user_m');

    if($ci->user_m->get_user_id_email($email)<>$user_id)
    {
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}


function check_my_access($permission_code='')
{


    //if am an admin allow all
    $ci=& get_instance();
    $ci->load->model('role_m');
    //$ci->load->model('permission_m');
//    $where=array(
//        'code'=>$permission_code,
//        'trash'=>'n'
//    );
//    if(!$ci->permission_m->get_where($where)){
//        //create the permission
//        $pieces=explode('_',$permission_code);
//
//        $section=ucfirst($pieces[1]);
//        $code=$permission_code;
//    }
//    //if its admin logged in


    //if its a new code add it


    if($ci->session->userdata('logged_in_usertype')=='1')
    {
        return TRUE;
    }
    else
    {
        //echo $permission_code;
        //if no permission id is passed
        if(!$permission_code)
        {
            return FALSE;
        }
        else
        {

            //get all current user's groups
            $my_groups=$ci->role_m->get_my_roles();
            //print_array($my_groups);
            if($my_groups)
            {
                //todo based on assumption that a user can not be in 2 groups with conflicting permissions
                foreach($my_groups as $group)
                {
                    //get_permissions basket
                    $permission_basket=get_permissions_by_group($group);
                }

                //if there are no permissions
                if(!$permission_basket)
                {
                    return FALSE;
                }
                else
                {
                    //if the permission_code is in basket then return true
                    if(in_array($permission_code,$permission_basket))
                    {
                        //print_array($permission_basket);
                        return $permission_basket;
                    }
                    else
                    {
                        return FALSE;
                    }

                }

            }
            else
            {
                //if user has no group
                return FALSE;

            }

        }

    }
}

function get_permissions_by_group($group_id='')
{
    $ci=& get_instance();
    $ci->load->model('groupaccess_m');
    $ci->load->model('permission_m');

    if(!$group_id)
    {
        return FALSE;
    }
    else
    {
        $where=array
        (
            'groupid'=>$group_id,
        );
        $result_set=$ci->groupaccess_m->get_where($where);
        //echo $ci->db->last_query();
        //if group has no permissions
        if(!$result_set)
        {
            return FALSE;
        }
        else
        {
            $permissions_basket=array();
            //return the permission ids
            foreach($result_set as $row)
            {
                //resolve permission codes
                $permissions_basket[]=$ci->permission_m->get_permission_info_by_id($id=$row['permissionid'],$param='code');

            }

            //print_array($permissions_basket);

            return $permissions_basket;
        }

    }
}


function get_all_session_data()
{
    $ci=& get_instance();
    return print_array($ci->session->all_userdata());

}

function get_user_location($user_id)
{
    $ci =& get_instance();
    $ci->load->model('user_additional_info_m');

    $where = array(
        'user_id' => $user_id,
        'trash' => 'n'
    );
    $location='';
    foreach ($ci->user_additional_info_m->get_where($where) as $row) {
        $location .= $row['map'];
    }

    return $location;
}


function save_user($firstname, $lastname, $email, $password)
{
    $ci =& get_instance();
    $ci->load->model('user_m');
    //echo $ci->input->post('ajax');
    $firstname = $ci->input->post('fname') <> '' ? $ci->input->post('fname') : $firstname;
    $lastname = $ci->input->post('lname') <> '' ? $ci->input->post('lname') : $lastname;
    $email = $ci->input->post('email') <> '' ? $ci->input->post('email') : $email;
    $password = $ci->input->post('password') <> '' ? $ci->input->post('password') : $password;
    $usertype = $ci->input->post('usertype') <> '' ? $ci->input->post('usertype') : '4';


    $ci->form_validation->set_rules($ci->user_m->add_user_validation);


    $str = '';

    if ($ci->form_validation->run() == FALSE) {
        //if there were errors add them to the errors array
        echo error_template(validation_errors());
    } else {

        $user_data = array
        (
            'fname' => $firstname,
            'lname' => $lastname,
            'email' => $email,
            'usertype' => $usertype,
            'password' => md5($password),
            'dateadded' => mysqldate(),
            'slug' => now() . random_string('numeric', 8)
        );
        //more validation special cases
        if ($ci->input->post('cpassword') <> '') {
            //chek o see id the two match
            if ($ci->input->post('password') <> $ci->input->post('cpassword')) {
                echo error_template('Passwords do not match');
            }
        } else {
            $user_id = $ci->user_m->create($user_data);
            if ($user_id) {

                //add him to the roles tables

                //if online
                if (check_live_server()) {
                    //send email to user
                    $salutation = $content = '<p>Hello<strong> ' . ucwords($firstname . ' ' . $lastname) . '</strong>,</p>';
                    $content = '<p>Hello<strong> ' . ucwords($firstname . ' ' . $lastname) . '</strong>,</p>

<p>You have created a new account on <a href="' . base_url() . '>' . base_url() . '</a>.</p>

<p>Below are your login credentials:</p>

<p><strong>Username</strong>: ' . $email . '</p>

<p><strong>Password</strong>: ' . $password . '</p>

<p>Click <a href="' . base_url() . 'admin/login">here</a> to login</p>
';

                    send_html_email($ci->input->post('email'), 'New account', $salutation, $content, SITE_EMAIL);


                }
                //if there were errors add them to the errors array

                $str .= jquery_clear_fields();

                echo $str;
                return $user_id;

            } else {
                //if there were errors add them to the errors array
                echo warning_template('User was not added. Please try one more time');


            }
        }


    }
}

function get_user_details($id,$param=''){
    $ci=& get_instance();
    $ci->load->model('user_m');
    return $ci->user_m->get_all_user_details($id,$param);
}



function split_username($name)
{
    $name = trim($name);
    if (strpos($name, ' ') === false) {
        // you can return the firstname with no last name
        return array('firstname' => $name, 'lastname' => '');

        // or you could also throw an exception
        throw Exception('Invalid name specified.');
    }

    $parts = explode(" ", $name);
    $lastname = array_pop($parts);
    $firstname = implode(" ", $parts);

    return array('fname' => $firstname, 'lname' => $lastname);
}











