<div class="home__filter">
	<form action="<?=site_url('home/filter');?>" method="post">
		<div class="container">
		<div class="col-sm-3">
			<label for="">Type</label>
			<?php echo form_dropdown('type', array('' => '-None-')+categories(), set_value('type'), 'class="form-control"');?>
		</div>

		<div class="col-sm-3">
			<label for="">Status</label>
			<?php echo form_dropdown('status', array('' => '-None-','Used'=>"USED","New"=>"NEW"), set_value('status'), 'class="form-control"');?>
		</div>

		<div class="col-sm-3">
			<label for="">Keyword</label>
			<input type="text" class="" name="keyword" value="<?=set_value('keyword');?>" placeholder="Search...">
		</div>

		<div class="col-sm-3">
			<label for="">&nbsp;</label>
			<button class="btn-submit">Search</button>
		</div>
		</div>
	</form>
</div>
  <div class="breadcrumb_wrap">
  	<div class="container">
		<ol class="breadcrumb clearfix">
			<li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
			<li class="breadcrumb-item active"><b><a href="<?php echo base_url();?>inventory/index/<?=isset($_POST['type'])?$_POST['type']:"1"; ?>"><?=(isset($filter[0]['category']))?$filter[0]['category']:"CLASS A DIESEL";?></a></b></li>
<!-- 			<li class="breadcrumb-item-back">
				<a href="">
					<i class="fa fa-chevron-circle-left fa-2x"></i> Back
				</a>
			</li> -->
		</ol>
  	</div>
</div>
<div class="page__interior">
	<div class="container">
		<h3 class="sub--title"><?=(isset($filter[0]['category']) && $filter[0]['category'])?$filter[0]['category']:"CLASS A DIESEL";?></h3>

		<div class="record__filter">
			<!-- Start -->
			<?php
			if($filter)
			{
				foreach ($filter as $key => $value)
				{
					$img = explode(",",$value['filename']);
					?>
	      	<div class="col-md-6">
          	<div class="product__box">
          		<h4><?=$value['condition']." ".$value['year']." ".$value['make']." ".$value['model'];?></h4>
          		<a href="#"><img src="<?=$value['filepath'].$img[0];?>" class="img-responsive" alt=""></a>
          		<div class="show-record clearfix">
          			<div class="col-sm-6 color--fade">
          				<div class="table-responsive">
        						<table class="table product__box--detail">
        							<tr>
        								<td>Stock #: <b><?=substr($value['stock'],0,7)."...";?></b></td>
        								<td>Sleeps: <b><?=($value['sleeps']!='')?$value['sleeps']:"--";?></b></td>
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
        									<a href="<?php echo base_url();?>home/detail/<?php echo $value['id']; ?>">
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
      		<?php
      	}
      }
      else
      {
        echo "<h1 style='text-align:center;'>No Records Found.</h1>";
      }
      ?>
      <!-- End -->
		</div>
	</div>
</div>