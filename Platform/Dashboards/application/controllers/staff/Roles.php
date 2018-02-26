<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	 public function __construct(){
	  parent::__construct();
	  $this->load->helper(array('common', 'url', 'html','form','security'));
	  $this->load->library(array('session', 'form_validation','pagination'));
	  $this->load->database();
	  //$this->load->model('cases_model');
		$this->load->model('staff_role_model','role');
	 }

	 function index($page=1){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 $this->load_header('Roles');
		 $this->load_sidemenu('roles');
		 // Header Options
		 $topbar_options = array(
				 'title' => 'Roles',
		 );
		 $this->load->view('topbar_view', $topbar_options);

		 $count = $this->role->get_count();
		 try
		 {
			 $pagingConfig   = init_pagination("/staff/roles",$count,15,3);
		 }
		 catch (Exception $err)
		 {
			 log_message("error", $err->getMessage());
			 return show_error($err->getMessage());
		 }

		 $data = array(
			 'pagination' 	=> $this->pagination,
			 'data'			=> $this->role->get_all((($page-1) * $pagingConfig['per_page']),$pagingConfig['per_page']),
			 'count'			=> $count,
		 );

		 $this->load->view('staff/roles/list_view', $data);
		 $this->load_footer();
	 }

	 function add(){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 if ($this->validate() == TRUE){
			$this->set_fields();
			$edit_id = $this->role->insert();
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Role Saved'.$edit_id.'</div>');

			// get Edit ID
			redirect('staff/roles');
		}
		$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Issue saving role name. please try again</div>');
		
		redirect('staff/roles');
	 }

	 function edit(){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 $id = $this->input->post('id');
		 
		 if ($this->validate() == TRUE){
		 	$this->set_fields();
		 	$edit_id = $this->role->update('id',$id);
		 	$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Role edited</div>');
			
			// get Edit ID
			redirect('staff/roles');
		 }
		 $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Issue saving role name. please try again</div>');
		 	
		 redirect('staff/roles');
	 }

	 function validate(){
	 		// set form validation rules

	    $this->form_validation->set_rules('name', 'Name','trim|required|min_length[1]|max_length[50]|xss_clean');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		return $this->form_validation->run();
	}

	function set_fields(){
		$this->role->name = $this->input->post('name');
	}

	function load_header($page_title){
		// Header Options
		$header_options = array(
				'body_class'	=> 'fixed-left',
				'morris'		=> false,
				'title' 		=> 'WorkPro | '.$page_title,
				'datepicker'	=> True,
				'select2'	=> True,
				'switchery'	=> True,
				'custombox'	=> True,
		);
		$this->load->view('header_view', $header_options);
	}

	function load_footer(){
		// Footer Options
		$js = 'jQuery(document).ready(function() {
					editName = jQuery( "#edit_form #name" );
					editId = jQuery( "#edit_form input[name=id]" );
					jQuery( ".edit_link" ).click(function() {
						
						editId.val($(this).data("id"));
						
						$.ajax({url: "'.base_url('staff/role/viewname/').'"+$(this).data("id"), success: function(result){
					        $("#div1").html(result);
					        editName.val(result);
					    }});
					});
				});';
		$footer_options = array(
				'jquery' => True,
				'morris'	=> false,
				'page' => 'staff_roles',
				'jquery_knob' => false,
				'datepicker'  => True,
				'select2'	=> True,
				'switchery'	=> True,
				'js'	=> $js,
				'custombox'	=> True,
		);
		$this->load->view('footer_view', $footer_options);
	}

	function load_sidemenu($active){
		//Side Menu Options
		$sidemenu_options = array(
				'active' => 'roles',
				'active_parent' => 'workshop',
		);
		$this->load->view('sidemenu_view', $sidemenu_options);
	}

	function define_active(){
		return 'roles';
	}
	public function viewname($id = 0){
		if(is_login() == false){
			redirect('user/login');
		}
		
		if($id!=0){
			$role = $this->role->get_item_by('id',$id);
			echo $role['name'];
		}
	}
}
