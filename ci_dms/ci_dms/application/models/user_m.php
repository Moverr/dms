<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 24/05/14
 * Time: 11:16
 */

//todo reorganise the additional user table to account for multiple telephones
class User_m extends MY_Model
{
    public $_table_name = 'users_members';
    public $_tablename = 'users';
    public $_primary_key = 'id';



    function __construct()
    {
        parent::__construct();



    }



}