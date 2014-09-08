<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($id)
    {
    	$where = array('id' => $id);
    	$query = $this->db->get_where('users',$where);
    	return $query->result_array();

    }

    public function edit_profile($id)
    {
        $where = array('id' => $id);
    }


}