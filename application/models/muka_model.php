<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muka_model extends CI_Model {

            public function __construct()
        {
            parent::__construct();
    if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin() )
    {
        redirect('auth', 'refresh');
    }

} 
//получаем все предприятия на которых производяться отгрузки
public function get_all($id_data){
	$where = array('id'=>$id_data);
    $query = $this->db->get_where('fabric',$where);
    return $query->result_array();

}
// Получаем данные о выгрузках муки по ID Хлеб-Завода
public function get_fabric($id_data){

    $where = array('id'=>$id_data);
    $query = $this->db->get_where('fabric',$where);
    return $query->result_array();


}

public function get_data($id_data){
	$where = array('fabric_id'=>$id_data);
    $query = $this->db->get_where('muka',$where);
    return $query->result_array();
}








}