 <div class="breadcrumb_wrap">
  	<div class="container">
		<ol class="breadcrumb clearfix">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Contact Us</li>
		</ol>

  	</div>
 </div>

  	<div class="page__interior">
  		<div class="container">
			<h3 class="sub--title">Contact Us</h3>
			<?php display_flashmsg($this->session->flashdata()); ?>
			<p>
				Toll Free  
					<a href="tel:1-888-352-2316" class="tel"> 
						<i class="fa fa-phone fa-2x"></i> 1-888-352-2316
					</a>
			</p>
			<p>To submit a comment or a question, please fill in the form below (required fields marked with an asterisk) and click the 'Continue' button. Our contact info appears below form.</p>

			<div class="map-wrapp">
				<div id="googleMap" style="width:100%;height:400px;"></div>
			</div>

			<div class="clearfix row">
				<form action="#" class="clearfix" method="post" enctype="multipart/form-data">
					<div class="col-sm-6">
						<div class="form-group <?php echo (form_error('firstname'))?'has-error':'';?>">
					    	<label for="firstname">First Name<span class="required">*</span></label>
					    	<input type="text" class="form-control" name="firstname" id="firstname"  placeholder="First Name" value="<?php echo set_value('firstname',$editdata['firstname']);?>"> 
                            <?php echo form_error('firstname'); ?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group <?php echo (form_error('lastname'))?'has-error':'';?>">
					    	<label for="lastname">Last Name<span class="required">*</span></label>
					    	<input type="text" class="form-control form-control-inline date date-picker" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo set_value('lastname',$editdata['lastname']);?>"> 
                            <?php echo form_error('lastname'); ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group ">
					    	<label for="phone">Contact Phone</label>
					    	<input type="text" class="form-control form-control-inline date date-picker" name="phone" id="phone" placeholder="Phone Number" value="<?php echo set_value('phone',$editdata['phone']);?>"> 
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group <?php echo (form_error('email'))?'has-error':'';?>">
					    	<label for="email">E-mail Address<span class="required">*</span></label>
					    	<input type="text" class="form-control form-control-inline date date-picker" name="email" id="email" placeholder="Email" value="<?php echo set_value('email',$editdata['email']);?>"> 
                             <?php echo form_error('email'); ?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group <?php echo (form_error('aboutus'))?'has-error':'';?>">
					    	<label for="aboutus">How did you hear about us?<span class="required">*</span></label>
					    	<!-- <input type="email" class="form-control" id="email"> -->
							<select name="aboutus" size="1" class="form-control">
								<option value="">--select--</option>
								<option value="Newspaper / Magazine Ad">Newspaper / Magazine Ad</option>
								<option value="Mailer">Mailer</option>
								<option value="Internet Search">Internet Search</option>
								<option value="Other">Other</option>
							</select>
							<?php echo form_error('aboutus'); ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
					    	<label for="other" data-lable="disabled">if other</label>
					    	<input type="other" class="form-control" id="other" disabled="disabled">
						</div>
					</div>

					<div class="col-sm-12">
						<div class="form-group">
					    	<label for="message">Message</label>
					    	<textarea class="form-control" name="message"  id="message" cols="30" rows="10"></textarea>
						</div>
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

