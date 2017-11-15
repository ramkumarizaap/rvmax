<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");

class Inventory extends Admin_Controller 
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('inventory_model');  
       
  }  
  public function index($id='')
  {

  	$this->load->library('pagination');
  	$limit = 4;
  	$start = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
  	$config['base_url'] = base_url()."inventory/index/".$id."/";
  	$this->data['inventory'] = $this->inventory_model->get_inventory($id,$limit,$start);
		$config['total_rows'] = $this->inventory_model->total_records($id);
		$config['per_page'] = $limit;
		$this->data['category'] = $this->inventory_model->get_data("category",array("id"=>$id),"name")->row_array();

		$config["uri_segment"] = 4;
		$this->pagination->initialize($config);
		$this->data['links'] = $this->pagination->create_links();
     $seo = get_seo_settings($this->data['category']['name']);
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
  	$this->layout->view('frontend/inventory/index');
  }
}
?>