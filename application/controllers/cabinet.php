<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabinet extends CI_Controller {



	public function idnex(){

   $this->load->model('cabinet_model');


   $data = array();
   $data['all_cab']       = $this->cabinet_model->get_all(); 
   
   $name = 'technics';
   $this->display_lib->user_page($data,$name);

	}

}