<div class="breadcrumb_wrap">
  	<div class="container">
		<ol class="breadcrumb clearfix">
			<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
			<li class="breadcrumb-item active"><b><a href="#"><?=$category['name'];?></a></b></li>
			<!-- <li class="breadcrumb-item-back">
				<a href="">
					<i class="fa fa-chevron-circle-left fa-2x"></i> Back
				</a>
			</li> -->
		</ol>
  	</div>
</div>
  	<div class="page__interior">
  		<div class="container">
  			<h3 class="sub--title"><?=$category['name'];?></h3>

  			<div class="record__filter">
  				<?php
  				if($inventory)
  				{
  					foreach ($inventory as $key => $value)
  					{
  						$img = explode(",",$value['filename']);
  						?>
	  						<!-- Start -->
				        <div class="col-md-6">
				          	<div class="product__box">
				          		<h4><?=$value['condition']." ".$value['year']." ".$value['make']." ".$value['model'];?></h4>
				          		<a href="<?=site_url('home/detail/'.$value['id'].'');?>">
			          				<img src="<?=$value['filepath'].$img[0];?>" class="img-responsive" alt="">
			          			</a>
				          		<div class="show-record clearfix">
				          			<div class="col-sm-6 color--fade">
				          				<div class="table-responsive">
			          						<table class="table product__box--detail">
			          							<tr>
			          								<td>Stock #: <b><?=($value['stock']!='')?$value['stock']:"--";?></b></td>
			          								<td>Sleeps: <b>6</b></td>
			          							</tr>
			          							<tr>
			          								<td>Location: <b><?=($value['location']!='')?$value['location']:"--";?></b></td>
			          								<td>Slides: <b><?=($value['slides']!='')?$value['slides']:"--";?></b></td>
			          							</tr>
			          							<tr>
			          								<td>Length: <b><?=($value['length']!='')?$value['length']:"--";?></b></td>
			          								<td>VIN#: <b><?=($value['vin']!='')?$value['vin']:"--";?></b> </td>
			          							</tr>
			          							<tr>
			          								<td>Pictures #: <b><?=count($img);?></b></td>
			          								<td>Mileage: <b><?=($value['mileage']!='')?$value['mileage']:"--";?></b> </td>
			          							</tr>
			          						</table>
				          				</div>
				          			</div>
				          			<div class="col-sm-6">
				          				<div class="table-responsive">
			          						<table class="table product__box--detail">
			          							<tr>
			          								<td>Price : <b class="price"><?=displayData($value['price'],"money");?></b></td>
			          							</tr>

			          							<tr>
			          								<td>Sale Price: <b><?=displayData($value['sale_price'],"money");?></b></td>
			          							</tr>

			          							<tr>
			          								<td>You Save: <b class="price"><?=displayData($value['price'] - $value['sale_price'],"money");?></b></td>
			          							</tr>

			          							<tr>
			          								<td>
			          									<a href="<?=site_url('home/detail/'.$value['id'].'');?>">
			          										<i>View pictures &amp; features</i>
			          									</a>
			          								</td>
			          							</tr>
			          						</table>
				          				</div>
				          			</div>
				          		</div>
				          	</div>
				        </div>
				        <!-- End -->
				       <?php
				    }
  				}
  				else
  				{
  					echo "<h3 style='text-align:center;'>No Records Found.</h3>";
  				}
  				?>
  			</div>
  		</div>
  		<div class="inv-pagination">
  			<?=$links;?>
  		</div>
  </div>