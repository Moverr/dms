<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
    protected $CI;

    function __construct()
    {
        parent::__construct();
        // reference to the CodeIgniter super object
        $this->CI =& get_instance();
    }

    public function is_unique($str, $field)
    {
        list($table, $field) = explode('.', $field);
        $query = $this->CI->db->limit(1)->get_where($table, array($field => $str, 'trash' => 'n'));

        return $query->num_rows() === 0;
    }
}
 