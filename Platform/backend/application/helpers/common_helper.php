<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (! function_exists('is_login'))
{
	function is_login()
	{
		$CI =& get_instance();
		// check if user is signed in
		$session = $CI->session->all_userdata();
		if (@$session['login'])
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

if (! function_exists('get_login_key'))
{
	function get_login_key()
	{
		$CI =& get_instance();
		// check if user is signed in
		$session = $CI->session->all_userdata();
		echo '<pre>';print_r($session);
		if (@$session['login'])
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
if (! function_exists('is_admin'))
{
	function is_admin()
	{
		$CI =& get_instance();
		// check if user is signed in
		$session = $CI->session->all_userdata();
		if (@$session['ugc']==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
if ( ! function_exists('get_random_password'))
{
	/**
	 * Generate a random password.
	 *
	 * get_random_password() will return a random password with length 6-8 of lowercase letters only.
	 *
	 * @access    public
	 * @param    $chars_min the minimum length of password (optional, default 6)
	 * @param    $chars_max the maximum length of password (optional, default 8)
	 * @param    $use_upper_case boolean use upper case for letters, means stronger password (optional, default false)
	 * @param    $include_numbers boolean include numbers, means stronger password (optional, default false)
	 * @param    $include_special_chars include special characters, means stronger password (optional, default false)
	 *
	 * @return    string containing a random password
	 */
	function get_random_password($chars_min=8, $chars_max=12, $use_upper_case=true, $include_numbers=true, $include_special_chars=true)
	{
		$length = rand($chars_min, $chars_max);
		$selection = 'aeuoyibcdfghjklmnpqrstvwxz';
		if($include_numbers) {
			$selection .= "1234567890";
		}
		if($include_special_chars) {
			$selection .= "!@c2ac6c09d91a8a2b2be78456fda8eb5f37ffba85quot;#$%&[]{}?|()-_";
		}
		$password = "";
		for($i=0; $i<$length; $i++) {
			$current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];
			$password .=  $current_letter;
		}
		return $password;
	}
}
if ( ! function_exists('get_option'))
{
	/**
	 * Generate a random password.
	 *
	 * get_options() will return an array of options.
	 *
	 * @access   public
	 * @param    $id option id (optional, default 0)
	 * @return   string containing a random password
	 */
	function get_option($id = 0)
	{
		$ci=& get_instance();
		$ci->load->database();
		$ci->db->select();
		$ci->db->from('options');
		if($id !=0){
			$ci->db->where('id',$id);
			$query = $ci->db->get();
			return $query->row_array();
		}else{
			$query = $ci->db->get();
			return $query->result_array();
		}

	}
}

if ( ! function_exists('generateSalt'))
{
	/**
	 * This function generates a password salt as a string of x (default = 15) characters
	 * in the a-zA-Z0-9!@#$%&*? range.
	 * @param $max integer The number of characters in the string
	 * @return string
	 * @author AfroSoft <info@afrosoft.tk>
	 */
	function generateSalt($max = 15) {
		$characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
		$i = 0;
		$salt = "";
		while ($i < $max) {
			$salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
			$i++;
		}
		return $salt;
	}
}

if ( ! function_exists('formate_date'))
{
	/**
	 * This function generates a password salt as a string of x (default = 15) characters
	 * in the a-zA-Z0-9!@#$%&*? range.
	 * @param $max integer The number of characters in the string
	 * @return string
	 * @author AfroSoft <info@afrosoft.tk>
	 */
	function formate_date($date) {
		$date = str_replace('/', '-', $date);
	  return date('Y-m-d', strtotime($date));
	}
}

if ( ! function_exists('init_pagination'))
{
	function init_pagination($uri,$total_rows,$per_page=10,$segment=2){
		$ci                          =& get_instance();
		$config['per_page']          = $per_page;
		$config['uri_segment']       = $segment;
		$config['base_url']          = base_url().$uri;
		$config['total_rows']        = $total_rows;
		$config['use_page_numbers']  = TRUE;

		$config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item"><span><b>';
  	$config['cur_tag_close'] = '<span class="sr-only">(current)</span></b></span></li>';

		$ci->pagination->initialize($config);
		return $config;
	}
}
/* End of file common_helper.php */
/* Location ./application/helpers/common_helper.php */
