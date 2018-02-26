<?php
/*
 * This is the file description
 *
 * @author Sami Elkady <info@samielkady.com>
 */
class Countries_model extends CI_Model {

  //fields
  var $iso;
  var $iso3;
  var $name;
  var $nicename;
  var $nationality;
  var $numcode;
  var $phonecode;
  var $table ='countries';
  /*
  * method: Constructor
  */

  function __construct()
  {
    // Call the Modviewel constructor
    parent::__construct();
  }
  /*
  * get taxonomy term row by key, email or id.
  * @param key string argument.
  * @param value string or int argument.
  * @return array of one row
  */
  function get_item_by($key, $value)
  {
    $query = $this->db->get_where($this->table, array($key => $value));
    return $query->row_array();
  }
  /*
  * get taxonomy terms in array of rows limited to page
  * @param start int argument.
  * @param limit int argument.
  * @param key string conditional field name, default is null.
  * @param value int or string argument.
  * @return array of rows
  */
function get_all($start=0,$limit=0,$key=NUll,$value=NUll)
  {
    $this->db->select($this->table.'.*');
    $this->db->from($this->table);
    if($key != Null){
      $this->db->where($key,$value);
    }
    $this->db->limit($limit,$start);
    $query = $this->db->get();
    return $query->result_array();
  }
  function get_fields($fields = array('iso' ,'nicename'))
    {
      $this->db->select($fields);
      $this->db->from($this->table);
      $query = $this->db->get();
      foreach ($query->result_array() as $row)
      {
        $result_array[$row['iso']] = $row['nicename'];
      }
      return $result_array;
    }

    function get_nationalities_list($fields = array('iso' ,'nationality'))
    {
    	$this->db->select($fields);
    	$this->db->from($this->table);
    	$query = $this->db->get();
    	foreach ($query->result_array() as $row)
    	{
    		$result_array[$row['iso']] = $row['nationality'];
    	}
    	return $result_array;
    }
    
    function get_countries_list($fields = array('iso' ,'nicename'))
    {
    	$this->db->select($fields);
    	$this->db->from($this->table);
    	$query = $this->db->get();
    	foreach ($query->result_array() as $row)
    	{
    		$result_array[$row['iso']] = $row['nicename'];
    	}
    	return $result_array;
    }
  /*
  * set taxonomy term fields for insert and update
  * @param action string, update or insert.
  */
  function set_fields($action='update')
  {
    $this->db->set('iso', $this->iso);
    $this->db->set('iso3', $this->iso3);
    $this->db->set('name', $this->name);
    $this->db->set('nicename', $this->nicename);
    $this->db->set('nationality', $this->nationality);
    $this->db->set('numcode', $this->numcode);
    $this->db->set('phonecode', $this->phonecode);

    if($action=='insert'){
      $this->db->set('created', unix_to_human(now(), TRUE, 'eu'));
    }
  }
    /*
     * insert taxonomy term row
     */
    function insert(){
    	$this->set_fields('insert');
    	$this->db->insert($this->table);
    	//$this->sent_email();
    }
    /*
     * update taxonomy term row
     * @param key string argument.
     * @param value string or int argument.
     */
    function update($key, $value){
    	$this->set_fields();
    	$this->db->where($key, $value);
    	$this->db->update($this->table);
    }

    /*
     * delete taxonomy term row
     * @param key string argument.
     * @param value string or int argument.
     * @return boolean
     */
    function delete($key, $value){
        $this->db->where($key, $value);
        $this->db->delete($this->table);
    }
}
