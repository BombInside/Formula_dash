<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cabinet_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }



public function get_latest()
{
    $this->db->order_by ('id');
    $query = $this->db->get('cabinet');
    return $query->result_array();
}

public function get_cab_num($id)
{
    $where = array('id'=>$id);
    $query = $this->db->get_where('cabinet',$where);
    return $query->result_array();
}

public function cab_tech($id)
{
    $where = array('cab_id'=>$id);
    $query = $this->db->get_where('technics',$where);
    return $query->result_array();
}




public function get_all()
{
    $this->db->order_by('id');
    $query = $this->db->get('cabinet');
    return $query->result_array();
}

    
    
}
?>