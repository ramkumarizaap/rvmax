<?php

//echo "<pre>";print_r(form_error());die;
//echo "<pre>";print_r($editdata);die;
//echo "<pre>";
//print_r($editdata); exit;
?>
<div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->
         <h3 class="page-title">
          Add User
         </h3>
         <div class="page-bar">
             <?php echo set_breadcrumb(); ?>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12 ">
               <!-- BEGIN SAMPLE FORM PORTLET-->
               <div class="portlet box green ">
                  <div class="portlet-title">
                     <div class="caption">
                        <i class="fa fa-table"></i> Add User Form
                     </div>
                  </div>
                   <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="mt-repeater form-horizontal" name="add_project" id="add_new_project" method="post" enctype="multipart/form-data">
                           <div class="form-body">
                              <h3 class="form-section"><strong>User Contact</strong></h3>
                              
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('name'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Name<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo set_value('name',$editdata['name']);?>">
                                          <?php echo form_error("name"); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/span-->
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('username'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">User Name<span class="required">*</span></label>
                                       <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="User Name" value="<?php echo set_value('username',$editdata['username']);?>">
                                        <?php echo form_error("username"); ?>
                                       </div>
                                    </div>

                                 </div>
                                 <!--/span-->
                              </div>
                              <!--/row-->
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('email'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Email<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo set_value('email',$editdata['email']);?>" >
                                          <?php echo form_error("email"); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/span-->
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('password'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Password<span class="required">*</span></label>
                                       <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo set_value('password',$editdata['password']);?>">
                                        <?php echo form_error("password"); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <!--/span-->
                              </div>
                              <input type="file" name="userfile" size="20" />
                              <!--/row-->                                            
                           </div>
                              <div class="form-actions">
                                 <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                       <button type="submit" class="btn green">Submit</button>
                                       <a href="<?php echo site_url('users');?>" class="btn default">Cancel</a>
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


