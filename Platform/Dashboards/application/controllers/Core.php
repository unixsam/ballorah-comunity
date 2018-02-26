<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	 public function __construct(){
	  parent::__construct();
	  $this->load->helper(array('url', 'html', 'common'));
	  $this->load->library('session');
	 }

	 function index(){
	 	if(is_login()){
			// Header Options
			$header_options = array(
				'body_class' => 'fixed-left',
				'morris'	=> false,
				'title' => 'WorkPro | Dashboard'
			);
			$this->load->view('header_view', $header_options);

			//Side Menu Options
			$sidemenu_options = array(
				'active' => 'dashboard',
				'active_parent' => 'dashboard',
			);
			$this->load->view('sidemenu_view', $sidemenu_options);
			// Topbar Options
			$topbar_options = array(
					'title' => 'Dashboard',
			);
			$this->load->view('topbar_view', $topbar_options);

			$data = array();
			$this->load->view('home_view', $data);
			// Footer Options
			$footer_options = array(
				'jquery' => True,
				'morris'	=> True,
				'page' => 'dashboard',
				'jquery_knob' => True
			);
			$this->load->view('footer_view', $footer_options);
	 	}else{
	 		redirect('user/login');
	 	}
	 }
}
