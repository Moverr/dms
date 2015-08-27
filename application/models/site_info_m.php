<?php

/**
 * Created by PhpStorm.
 * User: cengkuru
 * Date: 10/30/14
 * Time: 9:34 AM
 */
class Site_info_m extends MY_Model
{
    //defaults

    public $_tablename = 'site_info';
    public $_primary_key = 'id';

    public $validate_contact_info = array
    (

        array
        (
            'field' => 'site_email',
            'label' => 'Site email',
            'rules' => 'trim|valid_email'
        )

    );

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_info($field)
    {
        foreach ($this->get_all() as $row) {
            switch ($field) {
                case 'site_name':
                    $result = $row['site_name'];
                    break;
                case 'sitename':
                    $result = $row['site_name'];
                    break;
                case 'logo':
                    $result = $row['logo'];
                    break;
                case 'address':
                    $result = $row['address'];
                    break;
                case 'site_address':
                    $result = $row['address'];
                    break;

                case 'site_tel':
                    $result = $row['tel'];
                    break;
                case 'tel':
                    $result = $row['tel'];
                    break;
                case 'telephone':
                    $result = $row['tel'];
                    break;
                case 'email':
                    $result = $row['email'];
                    break;
                case 'site_email':
                    $result = $row['email'];
                    break;
                case 'fax':
                    $result = $row['fax'];
                    break;
                case 'map':
                    $result = $row['google_maps'];
                    break;
                case 'facebook':
                    $result = $row['facebook'];
                    break;
                case 'youtube':
                    $result = $row['youtube'];
                    break;
                case 'twitter':
                    $result = $row['twitter'];
                    break;
                case 'google_plus':
                    $result = $row['google_plus'];
                    break;
                case 'google':
                    $result = $row['google_plus'];
                    break;
                case 'tel':
                    $result = $row['tel'];
                    break;
                default:
                    $result = $this->get_all();

            }

            return $result;

        }
    }


}