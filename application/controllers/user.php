<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	    public function __construct()
        {
            parent::__construct();
if($this->session->userdata('user_logged')!=TRUE) redirect('main/login');
} 

}