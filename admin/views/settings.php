<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN PAGE HEADER-->
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
                <i class="fa fa-table"></i> SEO form
             </div>
          </div>
          <div class="portlet-body form">
              <!-- BEGIN FORM-->
            <form action="#" class="mt-repeater form-horizontal" name="add_inventory"  method="post" enctype="multipart/form-data">
              <div class="form-body">
              <!--/row-->
              <h3 class="form-section"><strong>SEO Details</strong> </h3>
              <!--/row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group <?php echo (form_error('sm_page'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Page</label>
                    <div class="col-md-6">
                      <select name="sm_page" class="form-control">
                        <option value="">--Select Page--</option>
                        <option value="Home" >Home page</option>
                        <option value="Contact Us" >Contact Us page</option>
                        <option value="Consignment" >Consignment page</option>
                        <option value="Aboust Us" >Aboust Us page</option>
                        <option value="Search">Search page</option>
                        <option value="Top Seller Awards" >Top Seller Awards page</option>
                        <option value="Single Inventory">Single Inventory Display page</option>
                        <option value="Credit Application">Credit Application</option>
                        <option value="Inventory">Inventory page</option>
                        <option value="Links">Links page</option>
                        <option value="Legal Notice">Legal Notice page</option>
                        <option value="Terms & Conditions">Terms & Conditions</option>
                        <option value="Warranties">Warranties</option>
                        <option value="Rv Life">Rv Life</option>
                        <option value="CLASS A DIESEL">CLASS A DIESEL</option>
                        <option value="CLASS A GAS">CLASS A GAS</option>
                        <option value="CLASS B & C">CLASS B&C</option>
                        <option value="Feedback page">Feedback page</option>
                      </select>
                      <?php echo form_error('sm_page'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group <?php echo (form_error('sm_page_title'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Page Title</span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="sm_page_title" id="sm_page_title" >
                      <?php echo form_error('sm_page_title'); ?>
                    </div>
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">Meta Keyword</span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="sm_keyword" id="sm_keyword"">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-md-3">Meta Description</span></label>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="sm_description" id="sm_description">
                    </div>
                  </div>
                </div>  
              </div>
              <div class="form-actions">
                <div class="row">
                  <div class="col-md-offset-3 col-md-9">
                      <button type="submit" class="btn green">Save</button>
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