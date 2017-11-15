<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(COREPATH."controllers/Admin_controller.php");


class Settings extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();  
      
        $this->load->model('settings_model');
	}

	public function index($id='')
	{
		try
      {	
        if($this->input->post('edit_id'))            
            $id = $this->input->post('edit_id');

        $this->form_validation->set_rules('sm_page','Page Name','trim|required');
        $this->form_validation->set_rules('sm_page_title','Page Title','trim|required');
        $this->form_validation->set_rules('sm_keyword','Keyword','trim');
        $this->form_validation->set_rules('sm_description','Description','trim');
        
        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
    
          if ($this->form_validation->run())
          {		

              $ins_data = array();
              $ins_data['sm_page'] = $this->input->post('sm_page');
              $ins_data['sm_page_title']  = $this->input->post('sm_page_title');
              $ins_data['sm_keyword']     = $this->input->post('sm_keyword');
              $ins_data['sm_description']     = $this->input->post('sm_description');
              $chk = get_seo_settings($this->input->post('sm_page'));
              if(!$chk)
              {    
                $ins_data['created_date']      = date("Y-m-d H:i:s");
                $setting_id    = $this->settings_model->insert($ins_data,"seo_master");
                $msg = 'settings added successfully';
              }
              else
              {
                $ins_data['updated_date']      = date("Y-m-d H:i:s");
                $setting_id = $this->settings_model->updated(array("sm_page"=>$ins_data['sm_page']),$ins_data,"seo_master");
                $msg = 'settings updated successfully'; 
              }
              $this->session->set_flashdata('success_msg',$msg,TRUE);
              redirect('settings');
          }    
       
      }
      catch (Exception $e)
      {
        $this->data['status']   = 'error';
        $this->data['message']  = $e->getMessage();                
      }

		$this->layout->view('settings');
	}

  public function get_seo_by_name()
  {
    $val = $this->input->post('val');
    $res = get_seo_settings($val);
    if($res)
    {
      $output['status'] = 'success';
      $output['output'] = $res;
    }
    else
    {
      $output['status'] = 'error';
    }
    $this->_ajax_output($output,true);
  }
}