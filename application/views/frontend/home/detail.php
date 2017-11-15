<div class="breadcrumb_wrap">
	<div class="container">
		<ol class="breadcrumb clearfix">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#"><?=$inventory['category'];?></a></li>
			<li class="breadcrumb-item active"><?=$inventory['condition']." ".$inventory['year']." ".$inventory['make']." ".$inventory['model'];?></li>
		</ol>
	</div>
</div>
<div class="page__interior">
	<div class="container">
		<div class="record__filter">
			<div class="record--detail clearfix">
	      <h4><?=$inventory['condition']." ".$inventory['year']." ".$inventory['make']." ".$inventory['model'];?></h4>
	    	<div class="clearfix"></div>
				<div class="clearfix"></div>
			  <div class="col-md-7">
					<div class="single-car-actions">
						<ul class="list-unstyled clearfix">
							<li>
	              <div class="stock-num heading-font">
	              	<i class="fa fa-globe"></i>
	              	<span>stock # </span><?=$inventory['stock'];?>
	              </div>
	            </li>
		          <li>
	              <div class="stock-num heading-font">
	              	<i class="fa fa-bus"></i>
	              	<?=$inventory['category'];?>
	              </div>
		          </li>						        
							<li>
								<a href="home/print/<?=$inventory['id'];?>" class="car-action-unit stm-schedule" data-toggle="modal" data-target="#test-drive">
								<i class="fa fa-print"></i> Print </a>
							</li>								            
	            <li class="stm-shareble">
	              <a href="#" class="car-action-unit stm-share" title="Share this" download="">
	                  <i class="fa fa-share"></i>
	              	Share this </a>
	            </li>
						</ul>
					</div>
					<hr />
	       	<div class="clearfix"></div>
	       	<div class="product__box">
			    	<div class="slider slider-for">
							<?php
							if($inventory['filename'])
							{
								$img = explode(",",$inventory['filename']);
								foreach ($img as $key => $value)
								{
									if($value!='')
									{
										?>
										<div class="slide--single">
											<img data-lazy="<?=$inventory['filepath'].$value;?>">		
										</div>
										<?php
									}
								}
							}
							if($inventory['youtube_url']!='')
							{
								?>
								<div class="slide--single" data-video="true">
										<a href="<?=$inventory['youtube_url'];?>" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-width="560" data-featherlight-iframe-height="315">
											<img data-lazy="<?=$inventory['filepath'].$img[0];?>">	
										</a>
								</div>
								<?php
							}
							?>
						</div>
						<div class="slider slider-nav">
							<?php
							foreach ($img as $key => $value)
							{
								if($value!='')
								{
									?>
									<div class="slide--nav">
										<img data-lazy="<?=$inventory['filepath'].$value;?>">		
									</div>
									<?php
								}
							}
							if($inventory['youtube_url']!='')
							{
								?>
								<div class="slide--nav" data-video="true">
									<img data-lazy="<?=$inventory['filepath'].$img[0];?>">		
								</div>
								<?php
							}
							?>
							</div>

				    <div class="">
    					<p><?=$inventory['description'];?></p>
    					<p>Text or call <a href="#" class="tel"><i class="fa fa-mobile fa-2x"></i> (864)-376-5600</a></p>
    				</div>
    				<div class="request__form">
          		<h3>Contact Sales</h3>
          		<hr>
	          	<p>To submit a comment or a question fill in the form below and click the submit button. One of our representative will contact you soon.</p>
	          	<form action="#" class="clearfix" method="post" enctype="multipart/form-data">
								<div class="col-sm-6">
									<div class="form-group">
								    	<label for="name">Your Name</label>
								    	<input type="text" class="form-control" name="name" id="name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
								    	<label for="company_name">Company Name</label>
								    	<input type="text" class="form-control" name="company_name"  id="company_name">
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
								    	<label for="phone">Phone</label>
								    	<input type="text" class="form-control" name="phone" id="phone">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group <?php echo (form_error('email'))?'has-error':'';?>">
								    	<label for="email">E-mail Address<span class="required">*</span></label>
								    	<input type="text" class="form-control" name="email" id="email">
								    	<?php echo form_error('email'); ?>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
								    	<label for="best_time">Best time to reach you</label>
										<select name="best_time" size="1" class="form-control">
											<option>Please Select</option>
											<option>Morning</option>
											<option>Afternoon</option>
											<option>Evening</option>
										</select>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
								    	<label for="message">Message</label>
								    	<textarea  class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
									</div>
								</div>

								<div class="col-sm-12">
									<center>
										<input type="submit"  value="Submit" class="submit">
									</center>
								</div>
							</form>
	          </div>
	        </div>
	      </div>  					
			  <div class="col-sm-5">
			  	<div class="show-record record--black single clearfix">
			    	<div class="col-sm-12 color--fade">
			      	<div class="price--highlight">
								<div class="single-car-prices">
									<div class="single-regular-price text-center">
										<span class="labeled">price</span>
										<span class="h3"><?=displayData($inventory['price'],"money");?></span>
									</div>
								</div>
      					<div class="price-description-single">
      						Sale Price: <b class="price--tag"><?=displayData($inventory['sale_price'],"money");?></b>
      					</div>
      					
      					<div class="price-description-single">
    							You Save:  <b class=""><?=displayData($inventory['price'] - $inventory['sale_price'],"money");?></b>
    						</div>
      				</div>
      				<div class="table-responsive">
    						<table class="table product__box--detail">
    							<tr>
    								<td>Stock # </td>
    								<td>:</td>
    								<td><b><?=$inventory['stock'];?></b></td>
    							</tr>
    							<tr>
    								<td>Location</td>
    								<td>:</td>
    								<td><b><?=($inventory['location']!='')?$inventory['location']:"--";?></b></td>
    							</tr>
    							<tr>
    								<td>Length</td>
    								<td>:</td>
    								<td> <b><?=($inventory['length']!='')?$inventory['length']:"--";?></b></td>
    								
    							</tr>
    							<tr>
    								<td>Pictures # </td>
    								<td>:</td>
    								<td><b><?=count($img)-1;?></b></td>
    							</tr>

    							<tr>
    								<td>Sleeps</td>
    								<td>:</td>
    								<td> <b><?=($inventory['sleeps']!='')?$inventory['sleeps']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td>Slides </td>
    								<td>:</td>
    								<td><b><?=($inventory['slides']!='')?$inventory['slides']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td>VIN# </td>
    								<td>:</td>
    								<td><b><?=($inventory['vin']!='')?$inventory['vin']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td>Mileage </td>
    								<td>:</td>
    								<td> <b><?=($inventory['mileage']!='')?$inventory['mileage']:"--";?></b></td>
    							</tr>

    							<tr>
        						<td>Height</td>
        						<td>:</td>
        						<td><b class="price"><?=($inventory['height']!='')?$inventory['height']:"--";?></b></td>
        					</tr>

        					<tr>
    								<td>Hitch Weight </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['hitch_weight']!='')?$inventory['hitch_weight']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td> Gross Weight </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['gross_weight']!='')?$inventory['gross_weight']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td> Fresh Water Capacity </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['fresh_water_capacity']!='')?$inventory['fresh_water_capacity']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td> Grey Water Capacity </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['grey_water_capacity']!='')?$inventory['grey_water_capacity']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td> Black Water Capacity </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['black_water_capacity']!='')?$inventory['black_water_capacity']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td> Furnace BTU </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['furnace_btu']!='')?$inventory['furnace_btu']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td>Engine </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['engine']!='')?$inventory['engine']:"--";?></b></td>
    							</tr>

    							<tr>
    								<td> Condition </td>
    								<td>:</td>
    								<td><b class="price"><?=($inventory['condition']!='')?$inventory['condition']:"--";?></b></td>
    							</tr>
    							<tr>
    								<td> Interior  </td>
    								<td>: </td>
    								<td> <b class="price"><?=($inventory['interior']!='')?$inventory['interior']:"--";?></b> </td>
    							</tr>
    						</table>
    						<?php
    						if($inventory['more_info']!='')
    						{
    							?>
	    						<div class="price--highlight">
	    							<a href="http://www.rvt.com/rvdetail.php?id=7638709&preview=1" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true" data-loading="Loading...Please Wait" data-featherlight-iframe-width="1040" data-featherlight-iframe-height="700" class="featherlight-loading">
	        					<div class="price-description-single--red">
	      							<!-- <a href=# onclick="window.open('<?=$inventory['more_info'];?>','newWindow','height=600,width=800, statusbar=yes, resizable=yes, scrollbars=1');"> -->
	      								<b>More Details</b>
	      							</a>
	      						</div>
	      						<br  />
	        				</div>
	        				<?php
	        			}
	        			?>
    						<!--  -->
      				</div>
      			</div>
      			<div class="clearfix"></div>
      		</div>      		
      		<div class="clearfix">
    				<ul class="info__list">
    					<li>
    						<a href="<?=site_url('inventory/index/'.$inventory['type'].'');?>">
    							<i class="fa fa-chevron-circle-left fa-2x"></i> 
    							Return to listings
    						</a>
    					</li>
    					<li>
    						<a href="#">
    							<i class="fa fa-print fa-2x"></i> 
    							Print Page
    						</a>
    					</li>
    				</ul>
  				</div>
        </div>
			</div>
		</div>
	</div>
 </div>