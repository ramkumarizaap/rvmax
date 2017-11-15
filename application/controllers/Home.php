<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");

class Home extends Admin_Controller 
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('inventory_model');  
    $this->load->model('credit_model'); 
    $this->load->model('contact_model');       
  }  
  public function index()
  {
    $seo = get_seo_settings("Home");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->data['banner'] = $this->inventory_model->get_banner();
    $this->data['category'] = $this->inventory_model->category();
    $this->data['lists'] = $this->inventory_model->get_where(array("type"=>"1"),'*',"inventory")->result_array();
    $this->data['gas'] = $this->inventory_model->get_where(array("type"=>"2"),'*',"inventory")->result_array();
    $this->data['class_bc'] = $this->inventory_model->get_where(array("type"=>"3"),'*',"inventory")->result_array();
    $this->data['others'] = $this->inventory_model->get_where(array("type"=>array("3","4")),'*',"inventory")->result_array();
  	$this->layout->view("frontend/home/index");

  }
  public function detail($id='')
  { 
   $seo = get_seo_settings("Search");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']); 
   try
   {
      if($this->input->post('edit_id'))  
         $id = $this->input->post('edit_id');

          $this->form_validation->set_rules('email','Email','trim|required|valid_email');
          $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run())
        {
            $form = $this->input->post();
            $ins['name'] = $form['name'];
            $ins['company_name'] = $form['company_name'];
            $ins['email_address'] = $form['email'];
            $ins['phone'] = $form['phone'];
            $ins['best_time'] = $form['best_time'];
            $ins['message'] = $form['message'];
            $ins_id = $this->inventory_model->insert($ins,"contact_sales");
      
            
            if($ins_id)
            {
              $inv = $this->inventory_model->get_where(array("id"=>$id),'*',"inventory")->row_array();
              $to = "i85rv@yahoo.com";
              $from = $form['email'];
              $from_name = $form['name'];
              $subject = "RV Request - ".$inv['condition']." ".$inv['year']." ".$inv['make']." ".$inv['model'];
              $message = "<html>
                            <body>
                              <table width=100% border=1>
                                <thead>
                                  <th><b>Contact Sales</b><th>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><b>Name</b></td>
                                    <td>".$from_name."</td>
                                  </tr>
                                  <tr>
                                    <td><b>Email</b></td>
                                    <td>".$to."</td>
                                  </tr>
                                  <tr>
                                    <td><b>Phone</b></td>
                                    <td>".$form['phone']."</td>
                                  </tr>
                                  <tr>
                                    <td><b>Best Time to Reach You</b></td>
                                    <td>".$form['best_time']."</td>
                                  </tr>
                                  <tr>
                                    <td><b>Message</b></td>
                                    <td>".$form['message']."</td>
                                  </tr>
                                </tbody>
                            </body>
                          </html>";
              send_email($to,$from,$from_name,'',$subject,$message);
              $this->session->set_flashdata("success_msg","Contact Sales has been submitted successfully.");
              redirect('home/detail/'.$id);
            }
          
        }

   }
   catch (Exception $e)
   {
     $this->data['status']   = 'error';
     $this->data['message']  = $e->getMessage();                
   }
    $this->data['inventory'] = $this->inventory_model->check_unique($id);
  	$this->layout->view("frontend/home/detail",$this->data);
  }
  public function filter($id='')
  {
    $seo = get_seo_settings("Search");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $search = array();
    $search['type'] = $this->input->post('type');
    $search['status'] = $this->input->post('status');
    $search['keyword'] = $this->input->post('keyword');
    $this->data['filter'] = $this->inventory_model->filter_search($search);
    $this->layout->view("frontend/home/filter",$this->data);
  }
  public function aboutus()
  {
    $seo = get_seo_settings("Aboust Us");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view("frontend/home/aboutus");
  }

  public function credit_application($id ='')
  {$seo = get_seo_settings("Credit Application");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    try
      {
          if($this->input->post('edit_id'))            
              $id = $this->input->post('edit_id');
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
          $this->form_validation->set_rules('agree','Select Agree','required',array("required"=>"Please Select Agree to continue"));
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


              if(!$id)
              {
                  
                $ins_data['created_date']      = date("Y-m-d H:i:s");
                $credit_id    = $this->credit_model->insert($ins_data,"credit");
                $msg = 'Credit added successfully';
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              redirect('home/credit_application');
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
      $this->layout->view('frontend/home/credit_application');
  }

  public function feedback()
  {$seo = get_seo_settings("Feedback page");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/feedback');
  }

  public function rvlife()
  {
    $seo = get_seo_settings("Rv Life");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/rv_life');
  }
  public function warranties()
  {
    $seo = get_seo_settings("Warranties");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/warranties');
  }
  public function consignment()
  {
    $seo = get_seo_settings("Consignment");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/consignment');
  }
  public function ebayaward()
  {
    $seo = get_seo_settings("Top Seller Awards");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/ebayaward');
  }
  public function links()
  {
    $seo = get_seo_settings("Links");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/links');
  }
  public function inventory()
  {
    $seo = get_seo_settings("Inventory");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/inventory');
  }
  public function terms()
  {
    $seo = get_seo_settings("Terms & Conditions");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/terms');
  }
  public function notice()
  {
    $seo = get_seo_settings("Legal Notice");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    $this->layout->view('frontend/home/notice');
  }
  public function consignmentpdf()
  {
    $this->layout->view('frontend/home/ConsignmentAgreementRVMAX');
  }
  public function contact($id='')
  { $seo = get_seo_settings("Contact Us");
    if($seo['sm_page_title'])
      $this->layout->set_title($seo['sm_page_title']);
    if($seo['sm_keyword'] && $seo['sm_description'])
      $this->layout->set_meta($seo['sm_keyword'], $seo['sm_description']);
    try
    {
       if($this->input->post('edit_id'))
        $id =$this->input->post('edit_id'); 
       $this->form_validation->set_rules('firstname','First Name','trim|required');
       $this->form_validation->set_rules('lastname','Last Name','trim|required');
       $this->form_validation->set_rules('email','Email Id','trim|required|valid_email');
       $this->form_validation->set_rules('aboutus','About Us','required');

       $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run() == true)
        {
          $ins_data = array();

          $form = $this->input->post();
          $ins_data["firstname"] = $form["firstname"];
          $ins_data["lastname"] = $form["lastname"];
          $ins_data["phone"] = $form["phone"];
          $ins_data["email"] = $form["email"];
          $ins_data["aboutus"] = $form["aboutus"];
          $ins_data["message"] = $form["message"];

          if(!$id)
          {
            
            $ins_data["created_date"] = date("Y-m-d H:i:s");
            $contact_id = $this->contact_model->insert($ins_data,"contact");
            $msg = "Contact added successfully";
          }
          
          $this->session->set_flashdata('success_msg',$msg,TRUE);
          redirect('home/contact');
        }
        else
        {
          $this->data['editdata']  = array('firstname'=>'','lastname'=>"","phone" => "","email" => "","aboutus" =>"","meassage"=>"");
        }
    }
    catch (Exception $e)
    {
        $this->data['status'] = 'error';
        $this->data['message'] = $e->getMessage();
    }
    $this->layout->view('frontend/home/contact');
  }


}
?>