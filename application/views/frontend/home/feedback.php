
  <div class="breadcrumb_wrap">
  	<div class="container">
		<ol class="breadcrumb clearfix">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Feedback</li>
			<!--<li class="breadcrumb-item-back">
				<a href="">
					<i class="fa fa-chevron-circle-left fa-2x"></i> Back
				</a>
			</li>-->
		</ol>

  	</div>
  </div>

  	<div class="page__interior">
  		<div class="container">
			<h3 class="sub--title">Feedback</h3>
			<?php $feedback = feedback(10);
			foreach ($feedback as $value) {
				if($value!=""){?>
			<div class="page--feed">
				<!-- Single feed Start-->
				<div class="single-feed">
					<p><?=$value["feedback"]?></p>
					<p class="text-right"><b><?=$value["name"]?></b></p>
			    </div>
			</div>
			<?php
					}
				}
			?>
  		</div>
  </div>
