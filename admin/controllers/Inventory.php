<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");

class Inventory extends Admin_Controller 
{

	protected $_inventory_validation_rules = array (
          array('field' => 'stock', 'label' => 'Stock', 'rules' => 'trim|required'),
          array('field' => 'year', 'label' => 'Year', 'rules' => 'trim|required'),
          array('field' => 'make', 'label' => 'Make', 'rules' => 'trim|required'),
          array('field' => 'model', 'label' => 'Model', 'rules' => 'trim|required'),
          array('field' => 'vin', 'label' => 'VIN', 'rules' => 'trim'),
          array('field' => 'mileage', 'label' => 'Mileage', 'rules' => 'trim'),
          array('field' => 'length', 'label' => 'Length', 'rules' => 'trim|required'),
          array('field' => 'height', 'label' => 'Height', 'rules' => 'trim'),
          array('field' => 'hitch_weight', 'label' => 'Hitch Weight', 'rules' => 'trim'),
          array('field' => 'gross_weight', 'label' => 'Gross Weight', 'rules' => 'trim'),
          array('field' => 'fresh_water_capacity', 'label' => 'Fresh Water Capacity', 'rules' => 'trim'),
          array('field' => 'black_water_capacity', 'label' => 'Black Water Capacity', 'rules' => 'trim'),
          array('field' => 'grey_water_capacity', 'label' => 'Grey Water Capacity', 'rules' => 'trim'),
          array('field' => 'furnace_btu', 'label' => 'Furnace BTU', 'rules' => 'trim'),
        	array('field' => 'engine', 'label' => 'Engine', 'rules' => 'trim'),
        	array('field' => 'chassis', 'label' => 'Chassis', 'rules' => 'trim'),
        	array('field' => 'type', 'label' => 'Type', 'rules' => 'trim|required'),
        	array('field' => 'condition', 'label' => 'Condition', 'rules' => 'trim|required'),
        	array('field' => 'sleeps', 'label' => 'Sleeps', 'rules' => 'trim|required'),
        	array('field' => 'slides', 'label' => 'Slides', 'rules' => 'trim|required'),
        	array('field' => 'price', 'label' => 'Price', 'rules' => 'trim|required'),
        	array('field' => 'sale_price', 'label' => 'Sale Price', 'rules' => 'trim'),
        	array('field' => 'location', 'label' => 'Location', 'rules' => 'trim'),
        	array('field' => 'interior', 'label' => 'Interior', 'rules' => 'trim'),
        	array('field' => 'description', 'label' => 'Description', 'rules' => 'trim|required'),
        	array('field' => 'more_info', 'label' => 'More Info', 'rules' => 'trim'),);
  function __construct()
  {
    parent::__construct();      
    $this->load->model('inventory_model');
  }  
  public function index()
  {
    $this->layout->add_javascripts(array('listing'));
    $this->load->library('listing');
    $this->simple_search_fields = array('type' => 'Type',"make" =>"Make","model" => "Model","year" => "Year");
    $this->_narrow_search_conditions = array("start_date");
    $str = '<a href="'.site_url('inventory/add/{id}').'" class="btn btn btn-padding yellow table-action"><i class="fa fa-edit edit"></i></a><a href="javascript:void(0);" data-original-title="Remove" data-toggle="tooltip" data-placement="top" class="table-action btn-padding btn red" onclick="delete_record(\'inventory/delete/{id}\',this);"><i class="fa fa-trash-o trash"></i></a>';    
    $this->listing->initialize(array('listing_action' => $str));
    $listing = $this->listing->get_listings('inventory_model', 'listing');
    $this->data['btn'] = "";
    $this->data['btn'] = "<a href=".site_url('inventory/add')." class='btn green'>Add New <i class='fa fa-plus'></i></a>";
    if($this->input->is_ajax_request())
      $this->_ajax_output(array('listing' => $listing), TRUE);
    $this->data['bulk_actions'] = array('' => 'select', 'delete' => 'Delete');
    $this->data['simple_search_fields'] = $this->simple_search_fields;
    $this->data['search_conditions'] = $this->session->userdata($this->namespace.'_search_conditions');
    $this->data['per_page'] = $this->listing->_get_per_page();
    $this->data['per_page_options'] = array_combine($this->listing->_get_per_page_options(), $this->listing->_get_per_page_options());
    $this->data['search_bar'] = $this->load->view('listing/search_bar', $this->data, TRUE);
    $this->data['listing'] = $listing;
    $this->data['grid'] = $this->load->view('listing/view', $this->data, TRUE);
    $this->layout->view("frontend/inventory/index");
  }

  public function add($edit_id='')
  {
    if(isset($_FILES["banner_image"]["name"]) && $_FILES["banner_image"]["size"]>0)
    {
        $this->form_validation->set_rules('banner_image',  'Banner Image','trim|callback_imgratio');
    }
  	$this->form_validation->set_rules($this->_inventory_validation_rules);
  	$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            if($this->form_validation->run())
            {
    	        $form = $this->input->post();
    	        $ins_data['stock'] = $form['stock'];
    	        $ins_data['make'] = $form['make'];
    	        $ins_data['year'] = $form['year'];
    	        $ins_data['model'] = $form['model'];
    	        $ins_data['vin'] = $form['vin'];
    	        $ins_data['mileage'] = $form['mileage'];
    	        $ins_data['length'] = $form['length'];
    	        $ins_data['height'] = $form['height'];
              $ins_data['youtube_url'] = $form['youtube_url'];
    	        $ins_data['hitch_weight'] = $form['hitch_weight'];
    	        $ins_data['gross_weight'] = $form['gross_weight'];
    	        $ins_data['fresh_water_capacity'] = $form['fresh_water_capacity'];
    	        $ins_data['black_water_capacity'] = $form['black_water_capacity'];
    	        $ins_data['grey_water_capacity'] = $form['grey_water_capacity'];
    	        $ins_data['furnace_btu'] = $form['furnace_btu'];
    	        $ins_data['engine'] = $form['engine'];
    	        $ins_data['chassis'] = $form['chassis'];
    	        $ins_data['type'] = $form['type'];
    	        $ins_data['condition'] = $form['condition'];
    	        $ins_data['sleeps'] = $form['sleeps'];
    	        $ins_data['slides'] = $form['slides'];
    	        $ins_data['price'] = $form['price'];
    	        $ins_data['sale_price'] = $form['sale_price'];
    	        $ins_data['location'] = $form['location'];
    	        $ins_data['interior'] = $form['interior'];
    	        $ins_data['description'] = nl2br($form['description']);
    	        $ins_data['more_info'] = $form['more_info'];

              $added_files                      = $form['added_files'];
              $added_files1                      = $form['added_files1'];
              $file_path                        = $form['file_path'];
              if(count($_FILES['userfile']['name'])>0 && $_FILES['userfile']['size'][0]>0)
              {
                  $number_of_files_uploaded = count($_FILES['userfile']['name']);
                  $filedata = array();
                  $filedata = $this->do_upload($number_of_files_uploaded,$_FILES);
                 foreach($filedata as $fkey => $fvalue)
                 {
                    $filename .= (!empty($fvalue['file_name']))?$fvalue['file_name'].",":"";
                 }
                  $filename    = (!empty($added_files))?$added_files.",".$filename:$filename;                 
              }  
              else
              {
                $filepath  = $file_path;
                $filename  = $added_files;
                $filename1  = $added_files1;

              } 
              if(isset($_FILES["banner_image"]["name"]) && $_FILES["banner_image"]["size"]>0)
              {
                $filedata1 = $this->do_upload1();
                $filename1  = $filedata1['file_name'];
              }  

              $ins_data['filepath'] = base_path()."assets/img/inventory/";
              $ins_data['filename'] = (!empty($filename))?$filename:"";
              $ins_data['banner_image'] = (!empty($filename1))?$filename1:"";
    	if($edit_id)
    	{
    		$ins_id = $this->inventory_model->update(array("id"=>$edit_id),$ins_data,"inventory");
    		$this->session->set_flashdata("success_msg","Inventory updated successfully.",TRUE);
    	}
    	else
    	{
    		$ins_id = $this->inventory_model->insert($ins_data,"inventory");
    		$this->session->set_flashdata("success_msg","Inventory inserted successfully.",TRUE);	
    	}
    	redirect("inventory");
    }
    if($edit_id)
    {
    	$this->data['editdata'] = $this->inventory_model->get_where(array("id"=>$edit_id))->row_array();
    }
    else
    {
  		$this->data['editdata'] = array("id"=>"","stock"=>"","year"=>"","make"=>"","model"=>"","vin"=>"","mileage"=>"","length"=>"","height"=>"","youtube_url"=>"","filename"=>"","banner_image"=>"","hitch_weight"=>"","gross_weight"=>"","fresh_water_capacity"=>"","black_water_capacity"=>"","grey_water_capacity"=>"","furnace_btu"=>"","engine"=>"","chassis"=>"","type"=>"","condition"=>"","sleeps"=>"","slides"=>"","price"=>"","sale_price"=>"","location"=>"","interior"=>"","description"=>"","more_info"=>"");
    }
  	$this->layout->view('frontend/inventory/add');
  }
    function delete($del_id)
    {
      $access_data = $this->inventory_model->get_where(array("id"=>$del_id),'id')->row_array();     
      $output=array();
      if(count($access_data) > 0){
        $this->inventory_model->delete(array("id"=>$del_id));
        $output['message'] ="Record deleted successfuly.";
        $output['status']  = "success";
      }
      else
      {
        $output['message'] ="This record not matched by work item.";
        $output['status']  = "error";
      }      
      $this->_ajax_output($output, TRUE);            
    }

    public function do_upload($number_of_files_uploaded,$files)
    {
        $this->load->library('upload');
        if(count($_FILES["userfile"]["name"]) > 0)
        {
           for($i=0; $i < $number_of_files_uploaded; $i++)
          {
              $_FILES['userfile']['name']     = $files['userfile']['name'][$i];
              $_FILES['userfile']['type']     = $files['userfile']['type'][$i];
              $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
              $_FILES['userfile']['error']    = $files['userfile']['error'][$i];
              $_FILES['userfile']['size']     = $files['userfile']['size'][$i];
              $config = array(
                'allowed_types' => 'jpg|jpeg|png|gif',
                'max_size'      => 3000,
                'overwrite'     => FALSE,
                'upload_path'   => '../assets/img/inventory/'
              );

              $this->upload->initialize($config);

              if(!$this->upload->do_upload())
              {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('frontend/inventory/add', $error);
              }
              else
              {
                $final_file_data[] = $this->upload->data();

              }
            }
          return $final_file_data;
        }
    }

    public function do_upload1()
    {
        $this->load->library('upload');
        
             
              $config = array(
                'allowed_types' => 'jpg|jpeg|png|gif',
                'max_size'      => 3000,
                'overwrite'     => FALSE,
                // 'max_width'     =>1600,
                // 'max_height'    =>650,
                'upload_path'   => '../assets/img/banner/'
              );

              $this->upload->initialize($config);

              if(!$this->upload->do_upload('banner_image'))
              {
                $final_file_data = array('error' => $this->upload->display_errors());
               
              }
              else
              {
                $final_file_data = $this->upload->data();

             }
          return $final_file_data;
        }

    function imgratio($str)
    {  
      $str = getimagesize($_FILES['banner_image']['tmp_name']);
      if($str[0]>="1600" && $str[1]>="650")
        return true;
      else
      {
        $this->form_validation->set_message('imgratio',"The banner image should be 1600x650 ratio");
        return false;
      }
    }

}
?>