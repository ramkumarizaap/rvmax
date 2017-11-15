<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH.'libraries/models/App_model.php');

class Home_model extends App_model
{
  function __construct()
  {
    parent::__construct();
    $this->_table = 'credit';
  }
  
  function listing()
  {  
    
  }
}
?>