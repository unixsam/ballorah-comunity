<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('common', 'url', 'html','form','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}

	public function index(){
		if(is_login()){
			redirect("/");
		}else{
			redirect("user/login");
		}
	}

	function logout(){
		// destroy session
		$data = array('login' => '', 'uname' => '', 'uid' => '');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('user/login');
	}
	function register(){
		// set form validation rules
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|matches[password]|required|md5');

		// submit
		if ($this->form_validation->run() == FALSE){
			// fails
			$this->load->view('register_view');
		}else{
			//insert user details into db
			$data = array(
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);

			if ($this->user_model->insert_user($data)){
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('user/register');
			}else{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('user/register');
			}
		}
	}
	function login(){
		if(is_login()){
			redirect("/");
		}
		// get form input
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		// form validation
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger text-center" style="position: absolute;top: 20px;right: 20px;z-index: 99999;">', '</div>');
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");

		if ($this->form_validation->run() == FALSE){
			// validation fail
			$this->load->view('login_view');
		}else{
			// check for user credentials
			$uresult = $this->user_model->get_user($email, $password);
			if (count($uresult) > 0){
				// set session
				//var_dump($uresult);
				//TODO: Generate new API key and add it to the session array
				$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);//, 'api_key' => $uresult[0]->api_key);
				$this->session->set_userdata($sess_data);
				redirect("/");
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" style="position: absolute;top: 20px;right: 20px;z-index: 99999;">Wrong Email-ID or Password!</div>');
				redirect('user/login');
			}
		}
	}
	function profile(){
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['uname'] = $details[0]->fname . " " . $details[0]->lname;
		$data['uemail'] = $details[0]->email;
		$this->load->view('profile_view', $data);
	}
}
