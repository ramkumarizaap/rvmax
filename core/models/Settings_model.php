<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH.'libraries/models/App_model.php');

class Settings_model extends App_model
{
  function __construct()
  {
    parent::__construct();
    $this->_table = 'seo_master';
  }
  
  
  function get_data($table_name,$where,$field_name)
  { 
    
    if(count($where))
    {
      if($field_name!='')
        $this->db->select($field_name); 
          
      $result = $this->db->get_where($table_name,$where);
    }
    else
    {
      if($field_name!='')
        $this->db->select($field_name); 

      $result = $this->db->get($table_name);
    }
    return $result;
  }
  
}
?>