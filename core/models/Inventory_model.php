<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH.'libraries/models/App_model.php');

class Inventory_Model extends App_model
{
   
  function __construct()
  {
    parent::__construct();
    $this->_table = 'inventory';
  }
  function listing()
  {  
    $this->_fields = "a.*,b.name as category";
    $this->db->from("inventory a");
    $this->db->join("category b","a.type=b.id");
    $this->db->group_by('a.id');
   
    foreach ($this->criteria as $key => $value)
    {
      if( !is_array($value) && strcmp($value, '') === 0 )
        continue;
      switch ($key)
      {
        case 'type':
          $this->db->like('b.name', $value);
        break;
        case 'make':
          $this->db->like('a.'.$key, $value);
        break;
        case 'model':
          $this->db->like('a.'.$key, $value);
        break;
        case 'year':
          $this->db->like('a.'.$key, $value);
        break;
      }
    }
    return parent::listing();
  }

  function get_data($table_name='',$where='',$field_name='')
  { 
    
    if(count($where) && $where!='')
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
  
  function check_unique($id)
  {
    $this->db->select("a.*,b.name as category");
    $this->db->from("inventory a");
    $this->db->join("category b","a.type=b.id");
    $this->db->where("a.id",$id);
    return $this->db->get()->row_array();
  }

  public function get_inventory($id='',$limit='',$start='')
  {
      $this->db->select("*");
    if($id!='')
      $this->db->where("type",$id);
    if($limit!='')
      $this->db->limit($limit, $start);
      $this->db->from("inventory");
    return $this->db->get()->result_array();
  }
  public function total_records($id='')
  {
    $this->db->where("type",$id);
    $q = $this->db->get("inventory");
    return $q->num_rows();
  }
  public function get_banner()
  {
    $this->db->select("a.*,b.name as category");
    $this->db->from("inventory a");
    $this->db->join("category b","a.type=b.id");
    return $this->db->get()->result_array();
  }
  public function filter_search($filter)
  {
    $this->db->where("a.type",$filter['type']);
    if($filter['status']!='')
      $this->db->where("a.condition",$filter['status']);
    if($filter['keyword']!='')
    {
      $this->db->like("a.year",$filter['keyword']);
      $this->db->or_like("a.stock",$filter['keyword']);
      $this->db->or_like("a.make",$filter['keyword']);
      $this->db->or_like("a.model",$filter['keyword']);
      $this->db->or_like("a.description",$filter['keyword']);
      $this->db->or_like("a.location",$filter['keyword']);
      $this->db->or_like("a.interior",$filter['keyword']);
      $this->db->or_like("b.name",$filter['keyword']);
    }
    $this->db->select("a.*,b.name as category");
    $this->db->from("inventory a");
    $this->db->join("category b","a.type=b.id");
    $q = $this->db->get();
    return $q->result_array();
    
  }
  
  public function category()
  {
    $this->db->select("*");
    $this->db->from("category");
     $q = $this->db->get();
    return $q->result_array();
  }
}

?>