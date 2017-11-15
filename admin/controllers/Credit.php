<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");

class Credit extends Admin_Controller 
{
  function __construct()
  {
    parent::__construct();      
    $this->load->model('credit_model');     
  }  
  public function index()
  {
  	$this->layout->add_javascripts(array('listing'));
    $this->load->library('listing');
    $this->simple_search_fields = array('firstname' => 'First Name',"email" =>"Email","employer" => "Employe Name");
    $this->_narrow_search_conditions = array("start_date");
    $str = '<a href="'.site_url('credit/add/{id}').'" class="btn btn btn-padding yellow table-action"><i class="fa fa-edit edit"></i></a><a href="javascript:void(0);" data-original-title="Remove" data-toggle="tooltip" data-placement="top" class="table-action btn-padding btn red" onclick="delete_record(\'credit/delete/{id}\',this);"><i class="fa fa-trash-o trash"></i></a>'; 
    $this->listing->initialize(array('listing_action' => $str));
    $listing = $this->listing->get_listings('credit_model', 'listing');
    $this->data['btn'] = "<a href=".site_url('credit/add')." class='btn green'>Add Credit <i class='fa fa-plus'></i></a>";
    if($this->input->is_ajax_request())
      $this->_ajax_output(array('listing' => $listing), TRUE);
    $this->data['bulk_actions'] = array('' => 'select', 'delete' => 'Delete');
    $this->data['simple_search_fields'] = $this->simple_search_fields;
    $this->data['search_conditions'] = $this->session->userdata($this->namespace.'_search_conditions');
    $this->data['per_page'] = $this->listing->_get_per_page();
    $this->data['per_page_options'] = array_combine($this->listing->_get_per_page_options(), $this->listing->_get_per_page_options());
    $this->data['search_bar'] = $this->load->view('listing/search_bar', $this->data, TRUE);
    $this->data['listing'] = $listing;
    $this->data['grid']    = $this->load->view('listing/view', $this->data, TRUE); 
    $this->layout->view("frontend/credit/user_list");
  }
  	function add($edit_id ='')
   {
     try
      {
          if($this->input->post('edit_id'))            
              $edit_id = $this->input->post('edit_id');
          $this->form_validation->set_rules('firstname','Credit Name','trim|required');
          $this->form_validation->set_rules('middlename','Middle Name','trim');
          $this->form_validation->set_rules('lastname','Last Name','trim|required');
          $this->form_validation->set_rules('birthday','Birthday','trim');
          $this->form_validation->set_rules('security_number','Security Number','trim');
          $this->form_validation->set_rules('address','Address','trim');
          $this->form_validation->set_rules('city','City','trim');
          $this->form_validation->set_rules('state','State','trim');
          $this->form_validation->set_rules('zipcode','Zipcode','trim');
          $this->form_validation->set_rules('residence_time','Residence time','trim');
          $this->form_validation->set_rules('home_phone','Home Phone','trim');
          $this->form_validation->set_rules('cell_phone','Cell Phone','trim');
          $this->form_validation->set_rules('email','Email','trim|required|valid_email');
          $this->form_validation->set_rules('drive_lisence','Lisence','trim');
          $this->form_validation->set_rules('issue_date','Issue date','trim');
          $this->form_validation->set_rules('expir_date','Expire Date','trim');
          $this->form_validation->set_rules('pre_address','Address','trim');
          $this->form_validation->set_rules('pre_city','City','trim');
          $this->form_validation->set_rules('pre_state','State','trim');
          $this->form_validation->set_rules('pre_zipcode','Zipcode','trim');
          $this->form_validation->set_rules('employer','Employer','trim');
          $this->form_validation->set_rules('occupation','Occupation','trim');
          $this->form_validation->set_rules('emp_address','Address','trim');
          $this->form_validation->set_rules('emp_city','City','trim');
          $this->form_validation->set_rules('emp_state','State','trim');
          $this->form_validation->set_rules('emp_zipcode','Zipcode','trim');
          $this->form_validation->set_rules('work_phone','Phone','trim');
          $this->form_validation->set_rules('howlong','How Long','trim');
          $this->form_validation->set_rules('annual_salary','Salary','trim');
          $this->form_validation->set_rules('bankruptcy','Bankruptry','trim');
          $this->form_validation->set_rules('bank_discharged','Bank Charge','trim');
          $this->form_validation->set_rules('ever_finance','Finance','trim');
          $this->form_validation->set_rules('who_finance','Finance','trim');
          $this->form_validation->set_rules('trading_vehicle','Trading','trim');
          $this->form_validation->set_rules('kind_vehicle','Vehicle','trim');
          $this->form_validation->set_rules('down_payment','Payment','trim');

          $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
      
          if ($this->form_validation->run())
          {
              //Credit details
              $ins_data = array();
              $ins_data['firstname']         = $this->input->post('firstname');
              $ins_data['middlename']        = $this->input->post('middlename');
              $ins_data['lastname']          = $this->input->post('lastname');
              $ins_data['birthday']          = $this->input->post('birthday');
              $ins_data['security_number']   = $this->input->post('security_number');
              $ins_data['address']           = $this->input->post('address');
              $ins_data['city']              = $this->input->post('city');
              $ins_data['state']             = $this->input->post('state');
              $ins_data['zipcode']           = $this->input->post('zipcode');
              $ins_data['residence_time']    = $this->input->post('residence_time');
              $ins_data['home_phone']        = $this->input->post('home_phone');
              $ins_data['cell_phone']        = $this->input->post('cell_phone');
              $ins_data['email']             = $this->input->post('email');
              $ins_data['drive_lisence']     = $this->input->post('drive_lisence');
              $ins_data['issue_date']        = $this->input->post('issue_date');
              $ins_data['expir_date']        = $this->input->post('expir_date');
              $ins_data['pre_address']       = $this->input->post('pre_address');
              $ins_data['pre_city']          = $this->input->post('pre_city');
              $ins_data['pre_state']         = $this->input->post('pre_state');
              $ins_data['pre_zipcode']       = $this->input->post('pre_zipcode');
              $ins_data['employer']          = $this->input->post('employer');
              $ins_data['occupation']        = $this->input->post('occupation');
              $ins_data['emp_address']       = $this->input->post('emp_address');
              $ins_data['emp_city']          = $this->input->post('emp_city');
              $ins_data['emp_state']         = $this->input->post('emp_state');
              $ins_data['emp_zipcode']       = $this->input->post('emp_zipcode');
              $ins_data['work_phone']        = $this->input->post('work_phone');
              $ins_data['howlong']           = $this->input->post('howlong');
              $ins_data['annual_salary']     = $this->input->post('annual_salary');
              $ins_data['bankruptcy']        = $this->input->post('bankruptcy');
              $ins_data['bank_discharged']   = $this->input->post('bank_discharged');
              $ins_data['ever_finance']      = $this->input->post('ever_finance');
              $ins_data['who_finance']       = $this->input->post('who_finance');
              $ins_data['trading_vehicle']   = $this->input->post('trading_vehicle');
              $ins_data['kind_vehicle']      = $this->input->post('kind_vehicle');
              $ins_data['down_payment']      = $this->input->post('down_payment');


              if($edit_id){
                $ins_data['updated_date']   = date("Y-m-d H:i:s");
                $this->credit_model->update(array("id" => $edit_id),$ins_data);
                $msg = 'Credit updated successfully';
              }
              else
              {    
                $seller_data['created_date']   = date("Y-m-d H:i:s");
                $ins_data['created_date']      = date("Y-m-d H:i:s");
                $dog_id    = $this->credit_model->insert($ins_data,"credit");
                $msg = 'Credit added successfully';
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              redirect('credit');
          }    
          else
          {   
            $this->data['editdata']  = array('firstname'=>'','middlename'=>"","lastname" => "","birthday" => "","security_number" => "","address" => "","city" => "","state" => "","zipcode" => "","residence_time" => "","home_phone"  => "","cell_phone" => "","email" => "","drive_lisence" => "","issue_date" => "","expir_date" => "","pre_address" => "","pre_city" => "","pre_state" => "","pre_zipcode" => "","employer" => "","occupation" => "","emp_address" => "","emp_city" => "","emp_state" => "","emp_zipcode" => "","work_phone" => "","howlong" => "","annual_salary" => "","bankruptcy" => "","bank_discharged" => "","ever_finance" => "","who_finance" => "","trading_vehicle" => "","kind_vehicle" => "","down_payment" => "");
          }
      }
      catch (Exception $e)
      {
        $this->data['status']   = 'error';
        $this->data['message']  = $e->getMessage();                
      }

      if($edit_id){
        $edit_data           =$this->credit_model->get_where(array("id" => $edit_id))->row_array();
        $this->data['editdata']= $edit_data;       
      }     
      
        $this->layout->view('frontend/credit/add');
   }
    
     function delete($del_id)
    {
  
       $access_data = $this->credit_model->get_where(array("id"=>$del_id),'id')->row_array();     
       $output=array();
       if(count($access_data) > 0)
       {
         $this->credit_model->delete(array("id"=>$del_id));
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