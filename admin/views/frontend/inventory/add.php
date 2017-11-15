<div class="page-content-wrapper">
  <div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
      Add Inventory
    </h3>
    <div class="page-bar">
      <?php echo set_breadcrumb(); ?>
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
                <i class="fa fa-table"></i> Inventory Form
             </div>
          </div>
          <div class="portlet-body form">
              <!-- BEGIN FORM-->
            <form action="#" class="mt-repeater form-horizontal" name="add_inventory"  method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?=$editdata['id'];?>">
              <div class="form-body">
              <!--/row-->
              <h3 class="form-section"><strong>Inventory Details</strong> </h3>
              <!--/row-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('stock'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Stock #<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="stock" id="stock" value="<?php echo set_value('stock',$editdata['stock']);?>"> 
                        <?php echo form_error('stock'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('year'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Year <span class="required">*</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="year" id="year" value="<?php echo set_value('year',$editdata['year']);?>">
                        <?php echo form_error('year'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('make'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Make<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="make" id="make" value="<?php echo set_value('make',$editdata['make']);?>"> 
                        <?php echo form_error('make'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('model'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Model <span class="required">*</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="model" id="model" value="<?php echo set_value('model',$editdata['model']);?>">
                        <?php echo form_error('model'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">VIN #</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="vin" id="vin" value="<?php echo set_value('vin',$editdata['vin']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Mileage</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="mileage" id="mileage" value="<?php echo set_value('mileage',$editdata['mileage']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('length'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Length<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="length" id="length" value="<?php echo set_value('length',$editdata['length']);?>">
                     <?php echo form_error('length'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Height</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="height" id="height" value="<?php echo set_value('height',$editdata['height']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('userfile'))?'has-error':'';?>">
                      <label class="control-label col-md-3">Image</span></label>
                      <div class="col-md-9">
                          <input type="file"  name="userfile[]" size="20" multiple="multiple" />
                          <input type="hidden" name="added_files" value="<?php echo (!empty($editdata['filename']))?rtrim($editdata['filename'],","):""; ?>" />
                          <input type="hidden" name="file_path" value="<?php echo (!empty($editdata['filepath']))?rtrim($editdata['filepath'],","):""; ?>" />
                              <?php $files = explode(",",$editdata['filename']);
                              $baseurl = str_replace("admin","",base_url());
                                if(count($files)>0)
                                {
                                  echo "<br>";
                              foreach($files as $fname){ if(!empty($fname)){ ?>
                                                
                            <img src="<?php echo $editdata["filepath"]; ?><?php echo $fname; ?>" width="50" height="50" />
                                                    
                          <?php }}} ?>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">You Tube Input URL</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="youtube_url" id="youtube_url" value="<?php echo set_value('youtube_url',$editdata['youtube_url']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('banner_image'))?'has-error':'';?>">
                      <label class="control-label col-md-3">Home Page Banner</span></label>
                      <div class="col-md-9">
                          <input type="file"  name="banner_image" size="20" />
                          <input type="hidden" name="added_files1" value="<?php echo (!empty($editdata['banner_image']))?rtrim($editdata['banner_image'],","):""; ?>" />
                          <?php if(!empty($editdata["banner_image"])){ ?>
                            <br>
                            <img src="<?=base_path()."assets/img/banner/".$editdata["banner_image"]; ?>" width="150" height="100" />
                          <?Php }?>
                      </div>
                      <?php echo form_error('banner_image'); ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Hitch Weight</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="hitch_weight" id="hitch_weight" value="<?php echo set_value('hitch_weight',$editdata['hitch_weight']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Gross Weight</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="gross_weight" id="gross_weight" value="<?php echo set_value('gross_weight',$editdata['gross_weight']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Fresh Water Capacity</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="fresh_water_capacity" id="fresh_water_capacity" value="<?php echo set_value('fresh_water_capacity',$editdata['fresh_water_capacity']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Black Water Capacity</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="black_water_capacity" id="black_water_capacity" value="<?php echo set_value('black_water_capacity',$editdata['black_water_capacity']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Grey Water Capacity</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="grey_water_capacity" id="grey_water_capacity" value="<?php echo set_value('grey_water_capacity',$editdata['grey_water_capacity']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Furnace BTU</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="furnace_btu" id="furnace_btu" value="<?php echo set_value('furnace_btu',$editdata['furnace_btu']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Engine</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="engine" id="engine" value="<?php echo set_value('engine',$editdata['engine']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Chassis</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="chassis" id="chassis" value="<?php echo set_value('furnace_btu',$editdata['chassis']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('type'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Type<span class="required">*</span></label>
                    <div class="col-md-9">
                     <?php echo form_dropdown('type', array('' => '-None-')+categories(), set_value('type', $editdata['type']), 'class="form-control width_select select2"');?>
                     <?php echo form_error('type'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('condition'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Condition<span class="required">*</span></span></label>
                    <div class="col-md-9">
                      <?php echo form_dropdown('condition', array('' => '-None-','USED'=>"USED","NEW"=>"NEW"), set_value('condition', $editdata['condition']), 'class="form-control width_select select2"');?>
                      <?php echo form_error('condition'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('sleeps'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Sleeps<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="sleeps" id="sleeps" value="<?php echo set_value('sleeps',$editdata['sleeps']);?>">
                     <?php echo form_error('sleeps'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('slides'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Slides<span class="required">*</span></span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="slides" id="slides" value="<?php echo set_value('slides',$editdata['slides']);?>">
                      <?php echo form_error('slides'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('price'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Price<span class="required">*</span></label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="price" id="price" value="<?php echo set_value('price',$editdata['price']);?>">
                     <?php echo form_error('price'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Sale Price</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="sale_price" id="sale_price" value="<?php echo set_value('sale_price',$editdata['sale_price']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Location</label>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="location" id="location" value="<?php echo set_value('location',$editdata['location']);?>">
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">Interior</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="interior" id="interior" value="<?php echo set_value('interior',$editdata['interior']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group <?php echo (form_error('description'))?'has-error':'';?>">
                    <label class="control-label col-md-3">Description<span class="required">*</span></label>
                    <div class="col-md-9">
                     <textarea class="jqte-test form-control" name="description" id="description"><?php echo set_value('description',$editdata['description']);?></textarea>
                     <?php echo form_error('description'); ?>
                    </div>
                  </div>
                </div>                                                                                           
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-md-3">More Info</span></label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="more_info" id="more_info" value="<?php echo set_value('more_info',$editdata['more_info']);?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                     <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                           <button type="submit" class="btn green">Submit</button>
                           <a href="<?php echo site_url('inventory');?>" class="btn default">Cancel</a>
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