<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Virabotka_model extends CI_Model {

            public function __construct()
        {
            parent::__construct();
    if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin() )
    {
        redirect('auth', 'refresh');
    }

} 

    public function get_data($id_data){
    $where = array('fabric_id'=>$id_data);
    $query = $this->db->get_where('virabotka',$where);
    return $query->result_array();

    } 



}