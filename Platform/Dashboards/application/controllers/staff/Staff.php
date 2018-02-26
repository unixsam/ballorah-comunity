<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	 public function __construct(){
	 	parent::__construct();
	 	$this->load->helper(array('common', 'url', 'html','form','security'));
	  	$this->load->library(array('session', 'form_validation','pagination'));
	  	$this->load->database();

	  	$this->load->model('staff_model','staff');
		//$this->load->model('staff_roles_model','roles');
	 }

	 function index($page=1){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 $this->load_header('Staff');
		 $this->load_sidemenu('member');
		 // Header Options
		 $topbar_options = array(
				 'title' => 'Staff',
		 );
		 $this->load->view('topbar_view', $topbar_options);

		 $count = $this->staff->get_count();
		 try
		 {
			 $pagingConfig   = init_pagination("/staff/members",$count,15,3);
		 }
		 catch (Exception $err)
		 {
			 log_message("error", $err->getMessage());
			 return show_error($err->getMessage());
		 }

		 $data = array(
			 'pagination'		=> $this->pagination,
			 'data'				=> $this->staff->get_all((($page-1) * $pagingConfig['per_page']),$pagingConfig['per_page']),
			 'count'				=> $count,
		 );

		 $this->load->view('staff/members/list_view', $data);
		 $this->load_footer();
	 }

	 function add(){
		 if(is_login() === false){
			 redirect('user/login');
		 }
		 $this->load_header($this->define_active()['title']);
		 $this->load_sidemenu($this->define_active()['id']);
	 		// Header Options
	 		$topbar_options = array(
	 				'title' => $this->define_active()['title'],
	 		);
	 		$this->load->view('topbar_view', $topbar_options);

	 		$data = array(
	 			'roles' 		=> array(),
	 			'bc'			=> 	'Add staff member',
			);

	 		$this->load->view('staff/members/add_edit_view', $data);
			$this->load_footer();
	 }
	 
	 function save($id=0){
	 	if(is_login() === false){
	 		redirect('user/login');
	 	}
	 	$this->load_header($this->define_active()['title']);
	 	$this->load_sidemenu($this->define_active()['id']);
	 	
	 	if ($this->validate() == TRUE){
	 			$this->set_fields();
	 		if($id == 0){
	 			$edit_id = $this->staff->insert();
	 		}else{
	 			$edit_id = $this->staff->update('id',$id);
	 		}
	 		
	 		$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Staff Saved '.$edit_id.'</div>');
	 
	 		// get Edit ID
	 		redirect('staff/member/edit/'.$edit_id);
	 		
	 	}
	 	// Header Options
	 	$topbar_options = array(
	 			'title' => $this->define_active()['title'],
	 	);
	 	$this->load->view('topbar_view', $topbar_options);
	 
	 	$data = array(
	 			'roles' 		=> array(),
	 			'bc'			=> 	'Add staff member',
	 	);
	 
	 	$this->load->view('staff/members/add_edit_view', $data);
	 	$this->load_footer();
	 }

	 function edit($id = 0){
		 if(is_login() == false){
			 redirect('user/login');
		 }
	 	$this->load_header($this->define_active()['edit_title']);
	 	$this->load_sidemenu($this->define_active()['id']);

	 		// Header Options
	 		$topbar_options = array(
	 				'title' => $this->define_active()['edit_title'],
	 		);
	 		$this->load->view('topbar_view', $topbar_options);

	 		$data = array(
	 			'bc' 		=> "Edit staff member details",
				'data' 	=> $this->staff->get_item_by('id',$id),
			);

	 		$this->load->view('staff/members/add_edit_view', $data);
			$this->load_footer();
	 }

	 function validate(){
	 		// set form validation rules

	 	$this->form_validation->set_rules('name', 'name','trim|required|xss_clean');
	 	$this->form_validation->set_rules('contact', 'contact','trim|xss_clean');
	 	$this->form_validation->set_rules('work_permit', 'work_permit','trim|xss_clean');
	 	$this->form_validation->set_rules('permit_expiry_date', 'permit_expiry_date','trim|xss_clean');
	 	$this->form_validation->set_rules('role', 'role','trim|xss_clean');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		return $this->form_validation->run();
	}

	function set_fields(){
		$this->staff->name 					= $this->input->post('name');
		$this->staff->contact 				= $this->input->post('contact');
		$this->staff->work_permit 			= $this->input->post('work_permit');
		$this->staff->permit_expiry_date 	= $this->input->post('permit_expiry_date');
		$this->staff->role 					= $this->input->post('role');
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
				'page' => 'staff_member',
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
				'active_parent' => 'workshop',
		);
		$this->load->view('sidemenu_view', $sidemenu_options);
	}

	function define_active($type=0){
		switch ($type) {
			default:
				$active['id']  		= "members";
				$active['title']		= "New Member";
				$active['edit_title']	="Edit Member";
				break;
		}
		return $active;
	}
}
