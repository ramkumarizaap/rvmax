<?php
$uri = $this->uri->segment(2);
if($uri!="feedback")
{
?>

  <div class="home__feedback">
    <h3 class="data__title" data-back-txt="Feedback">Feedback</h3>
  <div class="conta-iner">
    <div class="feed__slide">
      <?php 
      $feedback = feedback(10);
      foreach ($feedback as $key => $value) {
        if($value["feedback"]!=""){
          
       ?>
      <div>
        <div class="single-feed">
          <p><p><?php echo $value["feedback"];?></p></p>

          <p class="text-right"><b><?php echo $value["name"];?></b></p>
          </div>
      </div>

      <?php  }}?>
        </div>
    </div>
  </div>
  <?php 
}?>
</div>

  <div class="top__footer">
    <div class="container text-center">
      <ul>
        <li><a href="<?=site_url();?>">Home</a></li>
        <li><a href="<?=site_url('inventory/index/1');?>">Inventory</a></li>
        <li><a href="<?=site_url('home/aboutus');?>">About Us</a></li>
        <li><a href="<?=site_url('home/warranties');?>">Warranties</a></li>
        <li><a href="<?=site_url('home/rvlife');?>">RV Life</a></li>
        <li><a href="<?=site_url('home/notice');?>">Legal Notice</a></li>
        <li><a href="<?=site_url('home/contact');?>">Contact Us</a></li>
        <li><a href="<?=site_url('home/terms');?>">Terms &amp; Conditions</a></li>
      </ul>
    </div>
  </div>

  <footer>
    <div class="container">
      <p>&copy; 2010-2017 rvmax.us. All Rights Reserved.</p>
    </div>
  </footer>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbn58SPmX-IAcXC7MMbUKnls_WIggGG-w&callback=initMap" async defer></script>
 </body>
</html>