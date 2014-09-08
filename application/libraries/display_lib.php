<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_lib
{
	public function user_page($data,$name)
	{
		$CI =& get_instance();

		$CI->load->view('preheader_view',$data);
		$CI->load->view('header_view');
		$CI->load->view('l_col_view', $data);
		$CI->load->view('bread_crumbs_view', $data);
		$CI->load->view($name.'_view',$data);
		$CI->load->view('footer_view');
	}

	public function login_page()
	{

	$CI =& get_instance ();

    $CI->load->view('admin/log_preheader_view');
    $CI->load->view('admin/header_view');
    $CI->load->view('admin/login_view');
    $CI->load->view('admin/log_footer_view');

	}

	public function admin_page($data,$name){
		$CI =& get_instance();
		$CI->load->view('admin/preheader_view');
		$CI->load->view('admin/header_view');
		$CI->load->view('admin/'.$name.'_view', $data);
		$CI->load->view('admin/footer_view');





	}

		public function _example_output($output = null)
  	{
		$CI =& get_instance();

		//$CI->load->view('admin/preheader_view');
		//$CI->load->view('admin/header_view');
    	$CI->load->view('example.php',$output);
		//$CI->load->view('admin/footer_view');

  	}

	public function admin_info_page($data)
	{
		$CI = & get_instance();

		$CI->load->view('admin/preheader_view');
		$CI->load->view('admin/header_view');
		$CI->load->view('admin/main_admin_view', $data);
		$CI->load->view('admin/footer_view');
	}


	
}

?>