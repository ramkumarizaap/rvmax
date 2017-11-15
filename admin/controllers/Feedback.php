<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");

class Feedback extends Admin_Controller 
{
  function __construct()
  {
      parent::__construct();  
      
      $this->load->model('feedback_model');
     
  }  
  public function index()
  {
    $this->layout->add_javascripts(array('listing'));
    $this->load->library('listing');
    $this->simple_search_fields = array('name' => 'Name');
    $this->_narrow_search_conditions = array("start_date");
    $str = '<a href="'.site_url('feedback/add/{id}').'" class="btn btn btn-padding yellow table-action"><i class="fa fa-edit edit"></i></a><a href="javascript:void(0);" data-original-title="Remove" data-toggle="tooltip" data-placement="top" class="table-action btn-padding btn red" onclick="delete_record(\'feedback/delete/{id}\',this);"><i class="fa fa-trash-o trash"></i></a>';    
    $this->listing->initialize(array('listing_action' => $str));
    $listing = $this->listing->get_listings('feedback_model', 'listing');
    $this->data['btn'] = "<a href=".site_url('feedback/add')." class='btn green'>Add Feedback <i class='fa fa-plus'></i></a>";
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
    $this->layout->view("frontend/feedback/feedback_list");
  }
    function add($edit_id ='')
   { 
     try
      {
        if($this->input->post('edit_id'))            
            $edit_id = $this->input->post('edit_id');

        $this->form_validation->set_rules('name','Name','trim|required');
        $this->form_validation->set_rules('feedback','Comments','trim|required');
        $this->form_validation->set_rules('status','Status','trim|required');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
    
          if ($this->form_validation->run())
          {

              //feedback details
              $ins_data = array();
              $ins_data['name'] = $this->input->post('name');
              $ins_data['feedback']  = $this->input->post('feedback');
              $ins_data['status']  = $this->input->post('status');

              if($edit_id)
              {
                $ins_data['updated_date']   = date("Y-m-d H:i:s");
                $this->feedback_model->update(array("id" => $edit_id),$ins_data);
                $msg = 'feedback updated successfully';
              }
              else
              {    
                $seller_data['created_date']   = date("Y-m-d H:i:s");
                $ins_data['created_date']      = date("Y-m-d H:i:s");
                $dog_id    = $this->feedback_model->insert($ins_data,"feedback");

                $msg = 'feedback added successfully';
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              redirect('feedback');
          }    
          else
          {   
             $this->data['editdata']  = array('name'=>'','feedback'=>"","status"=>"");
          }
      }
      catch (Exception $e)
      {
        $this->data['status']   = 'error';
        $this->data['message']  = $e->getMessage();                
      }

      if($edit_id)
      {
        $edit_data           =$this->feedback_model->get_where(array("id" => $edit_id))->row_array();
        $this->data['editdata']= $edit_data;       
      }    
      $this->layout->view('frontend/feedback/add');
  }
    
     function delete($del_id)
   {

      $access_data = $this->feedback_model->get_where(array("id"=>$del_id),'id')->row_array();     
      $output=array();
      if(count($access_data) > 0){
        $this->feedback_model->delete(array("id"=>$del_id));
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