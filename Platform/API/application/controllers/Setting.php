<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('common', 'url', 'html','form','security'));
		$this->load->library(array('session', 'form_validation','pagination'));
		$this->load->database();
		//$this->load->model('cases_model');
		$this->load->model('customer_model','customer');
		$this->load->model('countries_model','countries');
		$this->load->model('title_model','title');
	}
	
	public function index($page=1){
		if(is_login() == false){
			redirect('user/login');
		}
		$this->load_header('Customers');
		$this->load_sidemenu('Customers');
		// Header Options
		$topbar_options = array(
				'title' => 'Setting',
		);
		$this->load->view('topbar_view', $topbar_options);
		
		$data = array();
		
		$this->load->view('setting/setting_view', $data);
		$this->load_footer();
		}
		
		function add($type=1,$action='add'){
			if(is_login() == false){
				redirect('user/login');
			}
			$this->load_header($this->define_active($type)['title']);
			$this->load_sidemenu($this->define_active($type)['id']);
			if($action == 'save'){
				if ($this->validate() == TRUE){
					$this->set_fields();
					$edit_id = $this->customer->insert();
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Customer Saved'.$edit_id.'</div>');
		
					// get Edit ID
					redirect('customers/edit/'.$edit_id);
				}
			}
			// Header Options
			$topbar_options = array(
					'title' => $this->define_active($type)['title'],
			);
			$this->load->view('topbar_view', $topbar_options);
		
			$data = array(
					'title' 	=> $this->title->get_list(),
					'nationalities' 	=> $this->countries->get_nationalities_list(),
					'type'			=> $type,
					'bc'				=> 	'Save Customer',
					'action'				=> $action,
			);
		
			$this->load->view('customer_add_view', $data);
			$this->load_footer();
	}
	
	
	function load_header($page_title){
		// Header Options
		$header_options = array(
				'body_class' => 'fixed-left',
				'morris'	=> false,
				'title' => 'WorkPro | '.$page_title,
				'datepicker'  => True,
				'select2'	=> True,
				'switchery'	=> True,
		);
		$this->load->view('header_view', $header_options);
	}
	
	function load_footer(){
		// Footer Options
		$footer_options = array(
				'jquery' => True,
				'morris'	=> false,
				'page' => 'customer',
				'jquery_knob' => false,
				'datepicker'  => True,
				'select2'	=> True,
				'switchery'	=> True,
				'js'	=> ''
		);
		$this->load->view('footer_view', $footer_options);
	}
	
	function load_sidemenu($active){
		//Side Menu Options
		$sidemenu_options = array(
				'active' => $active,
				'active_parent' => 'customers',
		);
		$this->load->view('sidemenu_view', $sidemenu_options);
	}
	
	function define_active($type=0){
		
		$active['id']  		= "ind_cust_add";
		$active['title']	="New Indevidual Customer";
		$active['edit_title']	="Edit Indevidual Customer";
		
		return $active;
	}
}