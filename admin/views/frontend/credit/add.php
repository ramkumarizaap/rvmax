<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
      Add Credit
    </h3>
    <div class="page-bar">
    </div>
    <?php display_flashmsg($this->session->flashdata()); ?>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
      <div class="col-md-12 ">
         <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box green ">
          <div class="portlet-title">
             <div class="caption">
                <i class="fa fa-table"></i> Credit form
             </div>
          </div>
          <div class="portlet-body form">
              <!-- BEGIN FORM-->
            <form action="#" class="mt-repeater form-horizontal" name="add_inventory"  method="post" enctype="multipart/form-data">
              <div class="form-body">
              <!--/row-->
              <h3 class="form-section"><strong>Credit Details</strong> </h3>
              <!--/row-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('firstname'))?'has-error':'';?>">
                    <label class="control-label col-md-3">First Name<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo set_value('firstname',$editdata['firstname']);?>"> 
                        <?php echo form_error('firstname'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Middle Initial</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="middlename" id="middlename" value="<?php echo set_value('middlename',$editdata['middlename']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('lastname'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Last Name<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo set_value('lastname',$editdata['lastname']);?>"> 
                        <?php echo form_error('lastname'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Birthdate</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="birthday" id="birthday" value="<?php echo set_value('birthday',$editdata['birthday']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Security Number</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="security_number" id="security_number" value="<?php echo set_value('security_number',$editdata['security_number']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                    <div class="form-group">
                          <label class="control-label col-md-3">Address</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="address" id="address" placeholder="Address"><?php echo set_value('address',$editdata['address']);?></textarea>
                          <?php echo form_error('address'); ?>
                        </div>
                    </div>
                </div>
              </div>      
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label col-md-3">City</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="city" id="city" value="<?php echo set_value('city',$editdata['city']);?>">
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">State</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="state" id="state" value="<?php echo set_value('state',$editdata['state']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Zip Code</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo set_value('zipcode',$editdata['zipcode']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Residence Time</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="residence_time" id="residence_time" value="<?php echo set_value('residence_time',$editdata['residence_time']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Home Phone</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="home_phone" id="home_phone" value="<?php echo set_value('home_phone',$editdata['home_phone']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Cell Phone</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="cell_phone" id="cell_phone" value="<?php echo set_value('cell_phone',$editdata['cell_phone']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('email'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Email Address<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email',$editdata['email']);?>">
                     <?php echo form_error("email"); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Driver's License#</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="drive_lisence" id="drive_lisence" value="<?php echo set_value('drive_lisence',$editdata['drive_lisence']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Issue Date</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="issue_date" id="issue_date" value="<?php echo set_value('issue_date',$editdata['issue_date']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Expiration Date</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="expir_date" id="expir_date" value="<?php echo set_value('expir_date',$editdata['expir_date']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label col-md-3">Previous Address</label>
                      <div class="col-md-9">
                        <textarea class="form-control" name="pre_address" id="pre_address" placeholder="Address"><?php echo set_value('pre_address',$editdata['pre_address']);?></textarea>
                      </div>
                    </div>
                 </div>                                                                                    
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">City</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="pre_city" id="pre_city" value="<?php echo set_value('pre_city',$editdata['pre_city']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">State</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="pre_state" id="pre_state" value="<?php echo set_value('pre_state',$editdata['pre_state']);?>">
                     <?php echo form_error('pre_state'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                    <label class="control-label col-md-3">Zip Code</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="pre_zipcode" id="pre_zipcode" value="<?php echo set_value('pre_zipcode',$editdata['pre_zipcode']);?>">
                    </div>
                </div>  `
              </div>
              <h3 class="form-section"><strong>Employer Information</strong></h3>
              <div class="row">
                <div class="col-md-6">
                    <label class="control-label col-md-3">Employer</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="employer" id="employer" value="<?php echo set_value('employer',$editdata['employer']);?>">
                    </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Occupation </span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="occupation" id="occupation" value="<?php echo set_value('occupation',$editdata['occupation']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Employer Address</label>
                        <div class="col-md-9">
                          <textarea class="form-control" name="emp_address" id="emp_address" placeholder="Address"><?php echo set_value('emp_address',$editdata['emp_address']);?></textarea>
                        </div>
                    </div>
                </div>                                                                                       
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">City</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="emp_city" id="emp_city" value="<?php echo set_value('emp_city',$editdata['emp_city']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">State</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="emp_state" id="emp_state" value="<?php echo set_value('emp_state',$editdata['emp_state']);?>">
                    </div>
                  </div>
                </div>                                                                                         
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Zip Code</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="emp_zipcode" id="emp_zipcode" value="<?php echo set_value('emp_zipcode',$editdata['emp_zipcode']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Work Phone</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="work_phone" id="work_phone" value="<?php echo set_value('work_phone',$editdata['work_phone']);?>">
                    </div>
                  </div>
                </div>                                                                                         
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">How Long</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="howlong" id="howlong" value="<?php echo set_value('howlong',$editdata['howlong']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Annual Salary</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="annual_salary" id="annual_salary" value="<?php echo set_value('annual_salary',$editdata['annual_salary']);?>">
                    </div>
                  </div>
                </div>                                                                                        
              </div>
              <h3 class="form-section"><strong>Financial Information</strong></h3>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">Have you ever filed Bankruptcy?</label>
                    <div class="col-md-6">
                      <select name="bankruptcy" class="form-control">
                        <option>Select</option>
                        <option value="No" <?php echo set_select('bankruptcy',$editdata['bankruptcy'],($editdata['bankruptcy']=='No')?TRUE:FALSE); ?> >No</option>
                        <option value="Yes" <?php echo set_select('bankruptcy',$editdata['bankruptcy'],($editdata['bankruptcy']=='Yes')?TRUE:FALSE); ?>  >Yes</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">If YES, has the bankruptcy been discharged?</label>
                    <div class="col-md-6">
                      <select name="bank_discharged" class="form-control">
                        <option>N/A</option>
                        <option value="No" <?php echo set_select('bank_discharged',$editdata['bank_discharged'],($editdata['bank_discharged']=='No')?TRUE:FALSE); ?>>No</option>
                        <option value="Yes" <?php echo set_select('bank_discharged',$editdata['bank_discharged'],($editdata['bank_discharged']=='Yes')?TRUE:FALSE); ?>  >Yes</option>
                      </select>
                  </div>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">Have you ever financed a vehicle before?</label>
                    <div class="col-md-6">
                      <select name="ever_finance" class="form-control">
                        <option value="">--Select--</option>
                        <option value="No" <?php echo set_select('ever_finance',$editdata['ever_finance'],($editdata['ever_finance']=='No')?TRUE:FALSE); ?>>No</option>
                        <option value="Yes" <?php echo set_select('ever_finance',$editdata['ever_finance'],($editdata['ever_finance']=='Yes')?TRUE:FALSE); ?>>Yes</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">If YES, who financed the vehicle? </span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="who_finance" id="who_finance" value="<?php echo set_value('who_finance',$editdata['who_finance']);?>">
                    </div>
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">If trading in a vehicle, what kind of vehicle is it? </span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="trading_vehicle" id="trading_vehicle" value="<?php echo set_value('trading_vehicle',$editdata['trading_vehicle']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">If YES, who financed the vehicle? </span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="kind_vehicle" id="kind_vehicle " value="<?php echo set_value('kind_vehicle',$editdata['kind_vehicle']);?>">
                    </div>
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">If trading in a vehicle, what kind of vehicle is it? </span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="down_payment" id="down_payment" value="<?php echo set_value('down_payment',$editdata['down_payment']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                      <button type="submit" class="btn green">Submit</button>
                      <a href="<?php echo site_url('credit');?>" class="btn default">Cancel</a>
                  </div>
                </div>
              </div>
            </form>
              <!-- BEGIN PAGE TITLE-->
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTENT -->
  </div>
</div>