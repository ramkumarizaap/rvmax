<div class="page__interior">
	<div class="container">
		<!-- <h3 class="data__title" data-back-txt="Class a Gas">Class a Gas</h3> -->
		<div class="record__filter">
			<div class="record--detail clearfix">
	      <h4>Used 2008 Forest River Berkshire 40qs</h4>
	      <div class="clearfix"></div>
				<!-- Start -->
	        <div class="col-md-6">
          	<div class="product__box">
          		 <img src="" alt="">
          		 			
							<div class="slider slider-for">	
							
							<?php
							$files = explode(",",$inventory['filename']);
									
		          		 			foreach ($files as $k => $v) {
		          		 				if($v!=""){
		          		 			?>								
								<div class="slide--single">
									<img data-lazy="<?php echo $inventory["filepath"];?><?php echo $v;?>" >		
								</div>
								<?php }}?>
								<!--<div class="slide--single">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917582.JPG" >		
								</div>

								<div class="slide--single">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917621.JPG" >		
								</div>

								<div class="slide--single">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917580.JPG" >		
								</div>

								<div class="slide--single">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917582.JPG" >		
								</div>

								<div class="slide--single">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917621.JPG" >		
								</div>-->							
							</div>
							<div class="slider slider-nav">
								<?php
									
		          		 			foreach ($files as $k => $v) {
		          		 				if($v!=""){
		          		 			?>
								<div class="slide--nav">
									<img data-lazy="<?php echo $inventory["filepath"];?><?php echo $v;?>" >		
								</div>
								<?php }}?>
								<!--<div class="slide--nav">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917582.JPG" >		
								</div>
								<div class="slide--nav">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917621.JPG" >		
								</div>

								<div class="slide--nav">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917580.JPG" >			
								</div>

								<div class="slide--nav">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917582.JPG" >		
								</div>
								<div class="slide--nav">
									<img data-lazy="http://rvs4less.com/images/listings/1506461039/full/berkshire0917621.JPG" >		
								</div>-->			
							</div>
					    <!--  -->
          	</div>
	        </div>				
	        <div class="col-sm-6">
	        	<div class="show-record single clearfix">
        			<div class="col-sm-6 color--fade">
        				<div class="table-responsive">
      						<table class="table product__box--detail">
      							<tr>
      								<td>Stock #: <b<?php echo $inventory['stock'];?></b></td>
      								<td>Sleeps: <b><?php echo $inventory['sleeps'];?></b></td>
      							</tr>
      							<tr>
      								<td>Location: <b>&nbsp;</b></td>
      								<td>Slides: <b>4</b></td>
      							</tr>
      							<tr>
      								<td>Length: <b><?php echo $inventory['length'];?></b></td>
      								<td>VIN#: <b>&nbsp;</b> </td>
      							</tr>
      							<tr>
      								<td>Pictures #: <b>4</b></td>
      								<td>Mileage: <b>&nbsp;</b> </td>
      							</tr>
      						</table>
        				</div>
        			</div>
        			<div class="col-sm-6">
        				<div class="table-responsive">
      						<table class="table product__box--detail">
      							<tr>
      								<td>Price : <b class="price"><?php echo "$".$inventory['price'];?></b></td>
      							</tr>
      							<tr>
      								<td>Sale Price: <b><?php echo "$".$inventory['sale_price'];?></b></td>
      							</tr>`
      							<tr>
      								<td>You Save: <b class="price">$87,500.00</b></td>
      							</tr>
      						</table>
        				</div>
        			</div>
        			<div class="clearfix"></div>
        			<div class="col-sm-12">
        				<hr>
        				<p>This 2008 Forest River Berkshire has great curb appeal which is helped by a glossy full body paint finish. Generator runs great and is relatively quiet. Duel zoned air conditioning helps keep the coach cool in the heat. New waterproof synthetic hardwood flooring throughout the coach as well</p>
        				<p>Text or call <a href="864-376-5600" class="tel"><i class="fa fa-mobile"></i> (864)-376-5600</a></p>
        			</div>
        		</div>
	        </div>
	        <!-- End -->
			</div>
		</div>
	</div>
</div>