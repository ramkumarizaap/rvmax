  <div class="breadcrumb_wrap">
  	<div class="container">
		<ol class="breadcrumb clearfix">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Credit Application</li>
		</ol>

  	</div>
  </div>

  	<div class="page__interior">

  		<div class="container">
			<h3 class="sub--title">Credit Application</h3>

			    <?php display_flashmsg($this->session->flashdata()); ?>

			<div class="clearfix row">
				<form action="#" class="clearfix" name="add_inventory"  method="post" enctype="multipart/form-data">

					<div class="clearfix"></div>
					<h3 class="form--title">Basic Information</h3>
					<div class="clearfix"></div>

					<div class="col-sm-4">
						<div class="form-group <?php echo (form_error('firstname'))?'has-error':'';?>">
					    	<label for="firstname">First Name<span class="required">*</span></label>
					    	<input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo set_value('firstname',$editdata['firstname']);?>">
					    	 <?php echo form_error('firstname'); ?>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Middle Initial</label>
					    	<input type="text" class="form-control" name="middlename" id="middlename" value="<?php echo set_value('middlename',$editdata['middlename']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group <?php echo (form_error('lastname'))?'has-error':'';?>">
					    	<label for="lastname">Last Name</label>
					    	<input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo set_value('lastname',$editdata['lastname']);?>"> 
                        	<?php echo form_error('lastname'); ?>
						</div>
					</div>


					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Birthdate</label>
					    	<input type="text" class="form-control" name="birthday" id="birthday" value="<?php echo set_value('birthday',$editdata['birthday']);?>">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Social Security Number</label>
					    	<input type="text" class="form-control" name="security_number" id="security_number" value="<?php echo set_value('security_number',$editdata['security_number']);?>">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
					    	<label for="">Address</label>
					    	<textarea class="form-control" name="address" id="address" ><?php echo set_value('address',$editdata['address']);?></textarea>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">City</label>
					    	<input type="text" class="form-control" name="city" id="city" value="<?php echo set_value('city',$editdata['city']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">State</label>
					    	<input type="text" class="form-control" name="state" id="state" value="<?php echo set_value('state',$editdata['state']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">zip</label>
					    	<input type="text" class="form-control" name="zipcode" id="zipcode" value="<?php echo set_value('zipcode',$editdata['zipcode']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Time at Residence</label>
					    	<input type="text" class="form-control" name="residence_time" id="residence_time" value="<?php echo set_value('residence_time',$editdata['residence_time']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Home Phone</label>
					    	<input type="text" class="form-control" name="home_phone" id="home_phone" value="<?php echo set_value('home_phone',$editdata['home_phone']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Cell Phone</label>
					    	<input type="text" class="form-control" name="cell_phone" id="cell_phone" value="<?php echo set_value('cell_phone',$editdata['cell_phone']);?>">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group <?php echo (form_error('email'))?'has-error':'';?>">
					    	<label for="email">Email Address</label>
					    	<input type="text" class="form-control" name="email" id="email" value="<?php echo set_value('email',$editdata['email']);?>">
                            <?php echo form_error("email"); ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Driver's License #</label>
					    	<input type="text" class="form-control" name="drive_lisence" id="drive_lisence" value="<?php echo set_value('drive_lisence',$editdata['drive_lisence']);?>">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Issue Date</label>
					    	<input type="text" class="form-control" name="issue_date" id="issue_date" value="<?php echo set_value('issue_date',$editdata['issue_date']);?>">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Expiration Date</label>
					    	<input type="text" class="form-control" name="expir_date" id="expir_date" value="<?php echo set_value('expir_date',$editdata['expir_date']);?>">
						</div>
					</div>

					<!-- <div class="clearfix"></div>
					<h3 class="form--title">Expiration Date Previous Address <small>if less than one year at current residence</small></h3>
					<div class="clearfix"></div> -->

					<div class="col-sm-12">
						<div class="form-group">
					    	<label for="">Expiration Date Previous Address</label>
					    	<textarea class="form-control" name="pre_address" id="pre_address" ><?php echo set_value('pre_address',$editdata['pre_address']);?></textarea>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">City</label>
					    	<input type="text" class="form-control" name="pre_city" id="pre_city" value="<?php echo set_value('pre_city',$editdata['pre_city']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">State</label>
					    	<input type="text" class="form-control" name="pre_state" id="pre_state" value="<?php echo set_value('pre_state',$editdata['pre_state']);?>">
                            <?php echo form_error('pre_state'); ?>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Zip</label>
					    	<input type="text" class="form-control" name="pre_zipcode" id="pre_zipcode" value="<?php echo set_value('pre_zipcode',$editdata['pre_zipcode']);?>">
						</div>
					</div>

					<div class="clearfix"></div>
						<h3 class="form--title">Employer Information </h3>
					<div class="clearfix"></div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Employer</label>
					    	<input type="text" class="form-control" name="employer" id="employer" value="<?php echo set_value('employer',$editdata['employer']);?>">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Occupation</label>
					    	 <input type="text" class="form-control" name="occupation" id="occupation" value="<?php echo set_value('occupation',$editdata['occupation']);?>">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
					    	<label for="">Employer Address</label>
					    	<textarea class="form-control" name="emp_address" id="emp_address" placeholder="Address"><?php echo set_value('emp_address',$editdata['emp_address']);?></textarea>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">City</label>
					    	<input type="text" class="form-control" name="emp_city" id="emp_city" value="<?php echo set_value('emp_city',$editdata['emp_city']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">State</label>
					    	<input type="text" class="form-control" name="emp_state" id="emp_state" value="<?php echo set_value('emp_state',$editdata['emp_state']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Zip</label>
					    	<input type="text" class="form-control" name="emp_zipcode" id="emp_zipcode" value="<?php echo set_value('emp_zipcode',$editdata['emp_zipcode']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Work Phone</label>
					    	<input type="text" class="form-control" name="work_phone" id="work_phone" value="<?php echo set_value('work_phone',$editdata['work_phone']);?>">
                    </div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">How Long?</label>
					    	<input type="text" class="form-control" name="howlong" id="howlong" value="<?php echo set_value('howlong',$editdata['howlong']);?>">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
					    	<label for="">Annual Salary</label>
					    	<input type="text" class="form-control" name="annual_salary" id="annual_salary" value="<?php echo set_value('annual_salary',$editdata['annual_salary']);?>">
						</div>
					</div>

					<div class="clearfix"></div>
					<h3 class="form--title">Financial Information</h3>
					<div class="clearfix"></div>


					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Have you ever filed Bankruptcy? </label>
							<select name="bankruptcy" size="1" class="form-control">
								<option value="">N/A</option>
								<option value="No"  <?php echo set_select('bankruptcy',$editdata['bankruptcy'],($editdata['bankruptcy']=='No')?TRUE:FALSE); ?> >No</option>
								<option value="Yes" <?php echo set_select('bankruptcy',$editdata['bankruptcy'],($editdata['bankruptcy']=='Yes')?TRUE:FALSE); ?>>Yes</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">If YES, has the bankruptcy been discharged? </label>
							<select name="bank_discharged" size="1" class="form-control">
								<option value="">N/A</option>
								<option value="No" <?php echo set_select('bank_discharged',$editdata['bank_discharged'],($editdata['bank_discharged']=='No')?TRUE:FALSE); ?>>No</option>
								<option value="Yes" <?php echo set_select('bank_discharged',$editdata['bank_discharged'],($editdata['bank_discharged']=='Yes')?TRUE:FALSE); ?>>Yes</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">Have you ever financed a vehicle before? </label>
							<select name="ever_finance" size="1" class="form-control">
								<option value="">N/A</option>
								<option value="No" <?php echo set_select('ever_finance',$editdata['ever_finance'],($editdata['ever_finance']=='No')?TRUE:FALSE); ?>>No</option>
								<option value="Yes" <?php echo set_select('ever_finance',$editdata['ever_finance'],($editdata['ever_finance']=='Yes')?TRUE:FALSE); ?>>Yes</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">If YES, who financed the vehicle?</label>
					    	 <input type="text" class="form-control" name="who_finance" id="who_finance" value="<?php echo set_value('who_finance',$editdata['who_finance']);?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">If trading in a vehicle, what kind of vehicle is it?</label>
					    	<input type="text" class="form-control" name="trading_vehicle" id="trading_vehicle" value="<?php echo set_value('trading_vehicle',$editdata['trading_vehicle']);?>">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="">What kind of vehicle are you looking to purchase?</label>
					    	<input type="text" class="form-control" name="kind_vehicle" id="kind_vehicle " value="<?php echo set_value('kind_vehicle',$editdata['kind_vehicle']);?>">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
					    	<label for="">What is your down payment?</label>
					    	<input type="text" class="form-control" name="down_payment" id="down_payment" value="<?php echo set_value('down_payment',$editdata['down_payment']);?>">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12">
						<p>
							By submitting the information you have listed above, you agree that you have accurately represented yourself and understand that the above information will be used for the purposes of attaining a credit history report to be used in determining your eligibility for financing from various financial institutions.
							None of the information above will be sold or distributed in any way

							<div class="form-group <?php echo (form_error('agree'))?'has-error':'';?>">

								<select name="agree" size="1" class="form-control small-select">
									<label for="agree">Please Agree<span class="required">*</span></label>
									<option value="1">I Agree</option>
									<option value="">I do not Agree</option>
								</select>
								<div class="small-select">
									<?php echo form_error('agree'); ?>
								</div>
							</div>

						</p>
					</div>
					<div class="col-sm-12">
						<center>
							<input type="submit" value="Submit" class="submit">
						</center>
					</div>
				</form>
			</div>
  		</div>
  </div>