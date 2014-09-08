<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

            public function __construct()
        {
            parent::__construct();
    if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin() )
    {
        redirect('auth', 'refresh');
    }

} 

    public function index()
    {
redirect('main/cabinet');
    }

	public function cabinet()
	{
       $id = $this->session->userdata('user_id');

        $data=array();
        $data['data'] = $this->db->get('cabinet');
        $data['user_info'] = $this->user_model->get_user($id);

        // Отправляем массив с данными в вид
        $name='technics';

        $this->load->view('preheader_view',$data);
        $this->load->view('header_view');
        $this->load->view('l_col_view',$data);
        $this->load->view('bread_crumbs_view',$data);
        $this->load->view($name.'_view',$data);
        $this->load->view('footer_view');
    }

    public function technics()
    {
        // Получаем id из третьего сегмента урла
        $id_data = (int) $this->uri->segment(3);
        $this->load->model('cabinet_model');
        $id = $this->session->userdata('user_id');
        // Собираем условие к запросу
        $data = array();
        $data['info'] = $this->session->userdata('email');
        $data['cab_num'] = $this->cabinet_model->get_cab_num($id_data);
        $data['tech'] = $this->cabinet_model->cab_tech($id_data);
        $data['user_info'] = $this->user_model->get_user($id);
        $this->load->helper('date');

            // Передаем данные в вид
        $name='cab_tech';

        $this->load->view('preheader_view',$data);
        $this->load->view('header_view');
        $this->load->view('l_col_view', $data);
        $this->load->view('bread_crumbs_view',$data);
        $this->load->view($name.'_view',$data);
        $this->load->view('footer_view');
    }

       public function fabric(){
        $id = $this->session->userdata('user_id');

        $data=array();
        $data['data'] = $this->db->get('fabric');
        $data['user_info'] = $this->user_model->get_user($id);

        // Отправляем массив с данными в вид
        $name='fabric';

        $this->load->view('preheader_view',$data);
        $this->load->view('header_view');
        $this->load->view('l_col_view',$data);
        $this->load->view('bread_crumbs_view',$data);
        $this->load->view('fabric/'.$name.'_view',$data);
        $this->load->view('footer_view');
   }

   public function muka(){
    $id_data = (int) $this->uri->segment(3);
    $this->load->model('muka_model');
    $id = $this->session->userdata('user_id');

    $data = array();
    $data['info'] = $this->session->userdata('email');
    $data['fabric'] = $this->muka_model->get_fabric($id_data);
    $this->load->helper('date');
    $data['user_info'] = $this->user_model->get_user($id);
    $data['muka'] = $this->muka_model->get_data($id_data);
            // Передаем данные в вид
        $name='muka';

        $this->load->view('preheader_view',$data);
        $this->load->view('header_view');
        $this->load->view('l_col_view', $data);
        $this->load->view('bread_crumbs_view',$data);
        $this->load->view('fabric/'.$name.'_view',$data);
        $this->load->view('footer_view');


   }
//запихиваем данные в отчет по заводу, сортировка по ID, Date. !#ž☺↓@
   public function otchet(){
    $this->load->model('muka_model');
    $this->load->model('virabotka_model');
    $id_data = (int) $this->uri->segment(3);
    $date = date('Y-j-m',time());
    $this->load->model('virabotka_model');
    $id = $this->session->userdata('user_id');

    $data=array();
    $data['info'] = $this->session->userdata('mail');
    $data['fabric'] = $this->muka_model->get_fabric($id_data);
    $this->load->helper('date');
    $data['user_info'] = $this->user_model->get_user($id);
    $data['goods'] = $this->virabotka_model->get_data($id_data);
    $data['muka'] = $this->muka_model->get_data($id_data);

    $name = 'virabotka';
  $this->load->view('preheader_view',$data);
    $this->load->view('header_view');
    $this->load->view('l_col_view', $data);
    $this->load->view('bread_crumbs_view',$data);
    $this->load->view('fabric/'.$name.'_view',$data);
    $this->load->view('footer_view'); 

  /*  $this->load->view('fabric/'.$name.'_view',$data);*/
   }




 
}