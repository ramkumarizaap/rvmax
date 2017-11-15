
<div id="fileuploader">Upload</div>
<div class="page-content-wrapper">
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->
         <h3 class="page-title">
          Add Feedback
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
                        <i class="fa fa-table"></i>Feedback Form
                     </div>
                  </div>
                   <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="mt-repeater form-horizontal" name="add_project" id="add_new_project" method="post" enctype="multipart/form-data">
                           <div class="form-body">

                               <!--/row-->
                              <h3 class="form-section"><strong>Feedback Details</strong> </h3>
                              <!--/row-->
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('name'))?'has-error':'';?>">
                                       <label class="control-label col-md-3"> Name<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="name" id="name"  placeholder="First Name" value="<?php echo set_value('name',$editdata['name']);?>"> 
                                          <?php echo form_error('name'); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group <?php echo (form_error('feedback'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Comments<span class="required">*</span></label>
                                       <div class="col-md-9">
                                          <textarea class="form-control" name="feedback" id="feedback" placeholder="Address"><?php echo set_value('feedback',$editdata['feedback']);?></textarea>
                                          <?php echo form_error('feedback'); ?>
                                       </div>
                                    </div>
                                 </div>   
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group <?php echo (form_error('status'))?'has-error':'';?>">
                                       <label class="control-label col-md-3">Status<span class="required">*</span></label>
                                       <div class="col-md-9 radio-btn">
                                          <input type="radio" class="form-control form-control-inline" name="status" id="status" value="Active" <?php echo set_radio('status',$editdata['status'],($editdata['status']=='Active')?True:False);?>> Active
                                          <input type="radio" class="form-control form-control-inline" name="status" id="status" value="Inactive" <?php echo set_radio('status',$editdata['status'],($editdata['status']==' Inactive')?True:False);?>> Inactive
                                          <?php echo form_error('status'); ?>
                                       </div>
                                    </div>
                                 </div>                                        
                              </div>
                                 <!--/span-->
                              <div class="form-actions">
                                 <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                       <button type="submit" class="btn green">Submit</button>
                                       <a href="<?php echo site_url('feedback');?>" class="btn default">Cancel</a>
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


