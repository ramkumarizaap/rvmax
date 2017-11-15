<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");

class Contact extends Admin_Controller 
{
  function __construct()
  {
      parent::__construct();  
      
      $this->load->model('contact_model');
     
  }  
  public function index()
  {
    $this->layout->add_javascripts(array('listing'));
    $this->load->library('listing');
    $this->simple_search_fields = array('firstname' => 'First Name',"lastname" =>"Last name","email" => "Email id");
    $this->_narrow_search_conditions = array("start_date");
    $str = '<a href="'.site_url('contact/add/{id}').'" class="btn btn btn-padding yellow table-action"><i class="fa fa-edit edit"></i></a><a href="javascript:void(0);" data-original-title="Remove" data-toggle="tooltip" data-placement="top" class="table-action btn-padding btn red" onclick="delete_record(\'contact/delete/{id}\',this);"><i class="fa fa-trash-o trash"></i></a>';    
    $this->listing->initialize(array('listing_action' => $str));
    $listing = $this->listing->get_listings('contact_model', 'listing');
    $this->data['btn'] = "<a href=".site_url('contact/add')." class='btn green'>Add Contact <i class='fa fa-plus'></i></a>";
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
    $this->layout->view("frontend/contact/contact_list");
  }
    function add($edit_id ='')
   {
     try
      {
        if($this->input->post('edit_id'))            
            $edit_id = $this->input->post('edit_id');

        $this->form_validation->set_rules('firstname','First Name','trim|required');
        $this->form_validation->set_rules('lastname','Last Name','trim|required');
        $this->form_validation->set_rules('phone','Phone','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('aboutus','Aboust Us','required',array("required"=>"Please Select about us to continue"));
        
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
    
          if ($this->form_validation->run())
          {

              //Contact details
              $ins_data = array();
              $ins_data['firstname'] = $this->input->post('firstname');
              $ins_data['lastname']  = $this->input->post('lastname');
              $ins_data['phone']     = $this->input->post('phone');
              $ins_data['email']     = $this->input->post('email');
              $ins_data['aboutus']   = $this->input->post('aboutus');

              if($edit_id)
              {
                $ins_data['updated_date']   = date("Y-m-d H:i:s");
                $this->contact_model->update(array("id" => $edit_id),$ins_data);
                $msg = 'Contact updated successfully';
              }
              else
              {    
                $ins_data['created_date']      = date("Y-m-d H:i:s");
                $contact_id    = $this->contact_model->insert($ins_data,"contact");
                $msg = 'Contact added successfully';
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              redirect('contact');
          }    
          else
          {   
             $this->data['editdata']  = array('firstname'=>'','lastname'=>"","phone" => "","email" => "","aboutus" =>"");
          }
          
      }
      catch (Exception $e)
      {
        $this->data['status']   = 'error';
        $this->data['message']  = $e->getMessage();                
      }

      if($edit_id)
      {
        $edit_data           =$this->contact_model->get_where(array("id" => $edit_id))->row_array();
        $this->data['editdata']= $edit_data;       
      }    
      $this->layout->view('frontend/contact/add_contact');
  }
    
     function delete($del_id)
   {

      $access_data = $this->contact_model->get_where(array("id"=>$del_id),'id')->row_array();     
      $output=array();
      if(count($access_data) > 0){
        $this->contact_model->delete(array("id"=>$del_id));
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

}
?>