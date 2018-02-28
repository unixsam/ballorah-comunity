<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

	 public function __construct(){
	  parent::__construct();
	  $this->load->helper(array('common', 'url', 'html','form','security'));
	  $this->load->library(array('session', 'form_validation','pagination'));
	  $this->load->database();
	  //$this->load->model('cases_model');
		$this->load->model('service_items_model','service_item');
		//$this->load->model('service_operations_model','service_operations');
		//$this->load->model('service_packages_model','service_packages');
		//$this->load->model('service_categories_model','service_categories');
		
		
		$this->load->library('Ajax_pagination');
		$this->perPage = 2;
	 }

	 function index($page=1){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 $this->load_header('Services');
		 $this->load_sidemenu('services');
		 // Header Options
		 $topbar_options = array(
			'title' => 'service_items',
		 );
		 $this->load->view('topbar_view', $topbar_options);

		 $count = $this->service_item->get_count();
		 
		 //pagination configuration
		 $config['target']      = '#itemsList';
		 $config['base_url']    = base_url().'services/items/ajaxPaginationData';
		 $config['total_rows']  = $count;
		 $config['per_page']    = $this->perPage;
		 $this->ajax_pagination->initialize($config);
		 
		 //get the posts data
		 $data = array(
		 		'data'			=> $this->service_item->get_all(0,$this->perPage),
		 		'count'			=> $count,
		 );
		 
		 $this->load->view('services/items/list_view', $data);
		 $this->load_footer();
	 }
	 
	 

	 function add(){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 if ($this->validate() == TRUE){
			$this->set_fields();
			$edit_id = $this->service_item->insert();
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">service_item Saved'.$edit_id.'</div>');

			// get Edit ID
			redirect('services');
		}
		$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Issue saving item name. please try again</div>');
		
		redirect('services');
	 }

	 function edit(){
		 if(is_login() == false){
			 redirect('user/login');
		 }
		 $id = $this->input->post('id');
		 
		 if ($this->validate() == TRUE){
		 	$this->set_fields();
		 	$edit_id = $this->service_item->update('id',$id);
		 	$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Item edited</div>');
			
			// get Edit ID
			redirect('services/items');
		 }
		 $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Issue saving item. please try again</div>');
		 	
		 redirect('services/items');
	 }

	 function validate(){
	 		// set form validation rules

	 	$this->form_validation->set_rules('name', 'name','trim|required|min_length[1]|max_length[50]|xss_clean');
	 	$this->form_validation->set_rules('mileage_interval', 'mileage_interval','trim|max_length[11]|xss_clean');
	 	$this->form_validation->set_rules('price', 'price','trim|max_length[10]|xss_clean');
	 	$this->form_validation->set_rules('cost', 'cost','trim|max_length[10]|xss_clean');
	 	$this->form_validation->set_rules('remarks', 'remarks','trim|xss_clean');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		return $this->form_validation->run();
	}

	function set_fields(){
		$this->service_item->name = $this->input->post('name');
		$this->service_item->mileage_interval = $this->input->post('mileage_interval');
		$this->service_item->price = $this->input->post('price');
		$this->service_item->cost = $this->input->post('cost');
		$this->service_item->remarks = $this->input->post('remarks');
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
				
					editName = jQuery( "#item_edit_form #name" );
					editId = jQuery( "#item_edit_form input[name=id]" );
					jQuery( ".edit_link" ).click(function() {
						alert();
						editId.val($(this).data("id"));
						
						$.ajax({url: "'.base_url('services/items/viewname/').'"+$(this).data("id"), success: function(result){
					        $("#div1").html(result);
					        editName.val(result);
					    }});
					});
				});';
		
		$js="";
		$footer_options = array(
				'jquery' => True,
				'morris'	=> false,
				'page' => 'staff_service_items',
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
				'active' => 'services',
				'active_parent' => 'workshop',
		);
		$this->load->view('sidemenu_view', $sidemenu_options);
	}

	function define_active(){
		return 'service_items';
	}
	public function viewname($id = 0){
		if(is_login() == false){
			redirect('user/login');
		}
		
		if($id!=0){
			$service_item = $this->service_item->get_item_by('id',$id);
			echo $service_item['name'];
		}
	}
	
	
	function ajaxPaginationData(){
		$page = $this->input->post('page');
		if(!$page){
			$offset = 0;
		}else{
			$offset = $page;
		}
	
		//total rows count
		$count = $this->service_item->get_count();
	
		//pagination configuration
		$config['target']      = '#itemsList';
		$config['base_url']    = base_url().'services/items/ajaxPaginationData';
		$config['total_rows']  = $count;
		$config['cur_page'] = $page;
		$config['per_page']    = $this->perPage;
		$this->ajax_pagination->initialize($config);
	
		//get the posts data
		
		$data = array(
				'data'			=> $this->service_item->get_all($offset,$this->perPage),
				'count'			=> $count,
		);
		//load the view
		$this->load->view('services/items/items_ajax_list_view.php', $data, false);
	}
	
	function editmodal(){
		$this->load->view('services/items/item_edit_modal_view.php', $data, false);
	}
}
