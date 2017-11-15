
<div id="fileuploader">Upload</div>
<div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->
         <h3 class="page-title">
          Add Contact
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
                        <i class="fa fa-table"></i> Add Contact Form
                     </div>
                  </div>
                   <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="mt-repeater form-horizontal" name="add_contact" id="add_contact" method="post" enctype="multipart/form-data">
                           <div class="form-body">

                               <!--/row-->
                              <h3 class="form-section"><strong>Contact Details</strong> </h3>
                              <!--/row-->
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('firstname'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">First Name<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="firstname" id="firstname"  placeholder="First Name" value="<?php echo set_value('firstname',$editdata['firstname']);?>"> 
                                          <?php echo form_error('firstname'); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('lastname'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Last Name<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control form-control-inline date date-picker" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo set_value('lastname',$editdata['lastname']);?>"> 
                                          <?php echo form_error('lastname'); ?>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('phone'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Contact phone<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control form-control-inline date date-picker" name="phone" id="phone" placeholder="Phone Number" value="<?php echo set_value('phone',$editdata['phone']);?>"> 
                                          <?php echo form_error('phone'); ?>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('email'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Email<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control form-control-inline date date-picker" name="email" id="email" placeholder="Email" value="<?php echo set_value('email',$editdata['email']);?>"> 
                                          <?php echo form_error('email'); ?>
                                       </div>
                                    </div>
                                 </div>
                                
                                 <!--/span-->
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group <?php echo (form_error('aboutus'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">How did you hear about us?<span class="required">*</span></label>
                                       <div class="col-md-9 radio-btn">
                                          <input type="radio" class="form-control form-control-inline" name="aboutus" id="aboutus" value="Newspaper / Magazine Ad" <?php echo set_radio('aboutus',$editdata['aboutus'],($editdata['aboutus']=='Newspaper / Magazine Ad')?True:False);?>> Newspaper / Magazine Ad
                                          <input type="radio" class="form-control form-control-inline" name="aboutus" id="aboutus" value=" Mailer" <?php echo set_radio('aboutus',$editdata['aboutus'],($editdata['aboutus']==' Mailer')?True:False);?>> Mailer
                                          <input type="radio" class="form-control form-control-inline" name="aboutus" id="aboutus" value="Internet Search" <?php echo set_radio('aboutus',$editdata['aboutus'],($editdata['aboutus']=='Internet Search')?True:False);?>>Internet Search
                                          <input type="radio" class="form-control form-control-inline" name="aboutus" id="aboutus" value="Other" <?php echo set_radio('aboutus',$editdata['aboutus'],($editdata['aboutus']=='Other')?True:False);?>>Other
                                          <?php echo form_error('aboutus'); ?>
                                       </div>
                                    </div>
                                 </div>                                        
                           </div>
                              <div class="form-actions">
                                 <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                       <button type="submit" class="btn green">Submit</button>
                                       <a href="<?php echo site_url('contact');?>" class="btn default">Cancel</a>
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


