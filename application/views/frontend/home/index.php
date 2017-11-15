  <div class="top__slide">
  <section class="lazy slider" data-sizes="100vw">
    <?php
    if($banner)
    {
      foreach ($banner as $key => $value)
      {
        if($value['banner_image']!='')
        {
          ?>
          <div class="slide-single">
            <img data-lazy="<?=base_url();?>assets/img/banner/<?=$value['banner_image'];?>" data-sizes="100vw">
              <div class="slide-caption">
                <h3><?=$value['year']." ".$value['make']." ".$value['model'];?></h3>
                <a href="<?=site_url('inventory/index/'.$value['type'].'');?>"><?=$value['category'];?></a>
              </div>
          </div>
          <?php
        }
      }
    }
    ?>
  </section>
</div>

<div class="home__filter">
  <form action="<?=site_url('home/filter');?>" method="post">
    <div class="container">
      <div class="col-sm-3">
        <label for="">Type</label>
        <?php echo form_dropdown('type', array('' => '-None-')+categories(), set_value('type'), 'class="form-control"');?>
      </div>

      <div class="col-sm-3">
        <label for="">Status</label>
        <select name="status">
          <option value="">Select Status</option>
          <option value="Used">Used</option>
          <option value="New">New</option>
        </select>
      </div>

      <div class="col-sm-3">
        <label for="">Keyword</label>
        <input type="text" class="" name="keyword" placeholder="Search...">
      </div>

      <div class="col-sm-3">
        <label for="">&nbsp;</label>
        <button type="submit" class="btn-submit">Search</button>
      </div>
    </div>
</form>
</div>

<div class="video__slide">
  <div class="con-tainer">
    <section class="v__slide slider">
      <?php
        if($banner)
        {
          foreach ($banner as $key => $value)
          {
            if($value['youtube_url']!='')
            {
              ?>
              <div class="slide-single">
                 <iframe width="720" height="405" src="<?=$value['youtube_url'];?>" allowfullscreen></iframe>
                 <div class="v__slide--caption"><?=$value['year']." ".$value['make']." ".$value['model'];?></div>
                 <a href="<?=site_url('inventory/index/'.$value['type'].'');?>"><?=$value['category'];?></a>
              </div>
              <?php
            }
          }
        }
        ?>
    </section>
  </div>
</div>

<div class="home__about">
  <div class="container">
    <p>Here at rvmax.us you can buy used class a motorhomes, RVs, diesel pushers or gas motor-homes which are dealer trades, privately owned consignments and some bank repos at absolutely "steal of deal," bargain prices!</p>

    <p>rvmax.us  is a virtually "ZERO" overhead RV dealer / broker / doing business with and thru licensed dealers located in Greenville, South Carolina and thru out USA &amp; Canada.</p>

    <p>Used RVs in particular motor home is also known as class A RV, bus, coach etc. You can buy at wholesale or best value for the condition prices here on our website! We have always sold our inventory primarily on the Internet to save you lots of time and money. We have sold hundreds of RVs not in just most of our 50 states but, Canada, England, Ireland, Lithuania, Australia, New Zealand and more..!</p>

    <p>Please check out our inventory with at least 50+ high resolution pictures and especially watch our YouTube videos that really set us apart to allow you virtual tour of your home on the wheels. We only sale 5-6 motor homes every month.. with 51 points inspection.. (Carry only 8-10 RVs, no BIG lots, no employees, simple math: Almost NO overhead = you get more RV for your money!). The bottom line is: We try to sell Road and camp ready coach, the value of RV / Motor-home depends on condition, condition &amp; condition!</p>

    <p><b><i>We can not do business without our valued customer's trust on our service and integrity, Thank You!</i></b></p>
  </div>
</div>


<div class="home__tab">
  <div id="tabs" data-role="tab">
    <center>
      <ul class="tab-decoration">
        <?php
          if($category)
          { $i=0;
            foreach ($category as $key => $value) {
              if($i<=2){
              if($value!="")
              {
        ?>
        <li>
          <a href="<?=$value["model"]?>">
            <span><?=$value["name"];?></span>
            <img src="assets/img/<?=$value["file"];?>" alt="">
          </a>
        </li>
        <?php
             }
            }
          $i++;
          }
          } 
        ?>
        <li>
          <a href="#rvm--other">
            <span>Other</span>
            <img src="assets/img/icon__4.png" alt="">
          </a>
        </li>
      </ul>
    </center>
   
    <div class="container clearfix">
      <!-- Tab 1 -->
      <div id="rvm--diesel">
        <h3 class="data__title" data-back-txt="Class a Diesel">Class A Deisel </h3>
       <?php
         if(count($lists)>0){  
         foreach($lists as $value){
         $files   = explode(",",$value['filename']);
          ?>
        <!-- Start --> 
        <div class="col-md-6">
          <div class="product__box">
            <h4><?=$value['condition']." ".$value['year']." ".$value['make']." ".$value['model'];?></h4>
            <a href="<?php echo base_url();?>home/detail/<?php echo $value['id']; ?>">
              <img src="<?php echo $value["filepath"]; ?><?php echo $files[0];?>" class="img-responsive" alt="">
            </a>
            <div class="show-record clearfix">
              <div class="col-sm-6 color--fade">
                <div class="table-responsive">
                  <table class="table product__box--detail">
                    <tr>
                      <td>Stock #: <b><?php echo $value['stock'];?></b></td>
                      <td>Sleeps: <b><?php echo $value['sleeps'];?></b></td>
                    </tr>
                    <tr>
                      <td>Location: <b>&nbsp;</b></td>
                      <td>Slides: <b><?php echo $value['slides'];?></b></td>
                    </tr>
                    <tr>
                      <td>Length: <b><?php echo $value['length'];?></b></td>
                      <td>VIN#: <b>&nbsp;</b> </td>
                    </tr>
                    <tr>
                      <td>Pictures #: <b><?php echo count($files);?></b></td>
                      <td>Mileage: <b>&nbsp;</b> </td>
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
                      <td>You Save: <b class="price"><?=displayData($value['price']- $value['sale_price'],"money");?></b></td>
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
        <!--End-->
      <?php }}?>
      </div>
      <!-- Tab 2 -->
      <div id="rvm--gas">
        <h3 class="data__title" data-back-txt="Class a Gas">Class a Gas</h3>   
          <?php
              if(count($gas)>0){  
              foreach($gas as $value){
              $files   = explode(",",$value['filename']);
          ?>
        <!-- Start -->
        <div class="col-md-6">
          <div class="product__box">
            <h4><?=$value['condition']." ".$value['year']." ".$value['make']." ".$value['model'];?></h4>
            <a href="<?php echo base_url();?>home/detail/<?php echo $value['id']; ?>">
              <img src="<?php echo $value["filepath"]; ?><?php echo $files[0];?>" class="img-responsive" alt="">
            </a>
            <div class="show-record clearfix">
              <div class="col-sm-6 color--fade">
                <div class="table-responsive">
                  <table class="table product__box--detail">
                    <tr>
                      <td>Stock #: <b><?php echo $value['stock'];?></b></td>
                      <td>Sleeps: <b><?php echo $value['sleeps'];?></b></td>
                    </tr>
                    <tr>
                      <td>Location: <b>&nbsp;</b></td>
                      <td>Slides: <b><?php echo $value['slides'];?></b></td>
                    </tr>
                    <tr>
                      <td>Length: <b><?php echo $value['length'];?></b></td>
                      <td>VIN#: <b>&nbsp;</b> </td>
                    </tr>
                    <tr>
                      <td>Pictures #: <b><?php echo count($files);?></b></td>
                      <td>Mileage: <b>&nbsp;</b> </td>
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
                      <td>You Save: <b class="price"><?=displayData($value['price']- $value['sale_price'],"money");?></b></td>
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
      <?php }} ?>
      </div>
      
      <!-- Tab 3 -->
      <div id="rvm--b-c">
        <h3 class="data__title" data-back-txt="Class B & C">Class B & C</h3>
          <?php
           if(count($class_bc)>0){  
           foreach($class_bc as $value){
           $files   = explode(",",$value['filename']);
            ?>
      
        <!-- Start -->
        <div class="col-md-6">
          <div class="product__box">
            <h4><?=$value['condition']." ".$value['year']." ".$value['make']." ".$value['model'];?></h4>
            <a href="<?php echo base_url();?>home/detail/<?php echo $value['id']; ?>">
              <img src="<?php echo $value["filepath"]; ?><?php echo $files[0];?>" class="img-responsive" alt="">
            </a>
            <div class="show-record clearfix">
              <div class="col-sm-6 color--fade">
                <div class="table-responsive">
                  <table class="table product__box--detail">
                    <tr>
                      <td>Stock #: <b><?php echo $value['stock'];?></b></td>
                      <td>Sleeps: <b><?php echo $value['sleeps'];?></b></td>
                    </tr>
                    <tr>
                      <td>Location: <b>&nbsp;</b></td>
                      <td>Slides: <b><?php echo $value['slides'];?></b></td>
                    </tr>
                    <tr>
                      <td>Length: <b><?php echo $value['length'];?></b></td>
                      <td>VIN#: <b>&nbsp;</b> </td>
                    </tr>
                    <tr>
                      <td>Pictures #: <b><?php echo count($files);?></b></td>
                      <td>Mileage: <b>&nbsp;</b> </td>
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
                      <td>You Save: <b class="price"><?=displayData($value['price']- $value['sale_price'],"money");?></b></td>
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
      <?php }} ?>  
      </div>       
      
      <!-- Tab 4 -->
      <div id="rvm--other">
        <!-- Start -->
         <h3 class="data__title" data-back-txt="others">Others</h3>
        <?php
         if(count($others)>0){  
         foreach($others as $value){
         $files   = explode(",",$value['filename']);
          ?>
      
        <div class="col-md-6">
          <div class="product__box">
            <h4><?=$value['condition']." ".$value['year']." ".$value['make']." ".$value['model'];?></h4>
            <a href="<?php echo base_url();?>home/detail/<?php echo $value['id']; ?>">
              <img src="<?php echo $value["filepath"]; ?><?php echo $files[0];?>" class="img-responsive" alt="">
            </a>
            <div class="show-record clearfix">
              <div class="col-sm-6 color--fade">
                <div class="table-responsive">
                  <table class="table product__box--detail">
                    <tr>
                      <td>Stock #: <b><?php echo $value['stock'];?></b></td>
                      <td>Sleeps: <b>6</b><?php echo $value['sleeps'];?></td>
                    </tr>
                    <tr>
                      <td>Location: <b>&nbsp;</b></td>
                      <td>Slides: <b><?php echo $value['slides'];?></b></td>
                    </tr>
                    <tr>
                      <td>Length: <b><?php echo $value['length'];?></b></td>
                      <td>VIN#: <b>&nbsp;</b> </td>
                    </tr>
                    <tr>
                      <td>Pictures #: <b><?php echo count($files);?></b></td>
                      <td>Mileage: <b>&nbsp;</b> </td>
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
                      <td>You Save: <b class="price"><?=displayData($value['price']- $value['sale_price'],"money");?></b></td>
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
      <?php  }}  ?> 
      </div>
       
    </div>
   
  </div>      
</div>

<div class="home__gallery">
  <div class="container">
      <div class="col-md-3">
        <a class="thumbnail gallery" href="http://rvs4less.com/images/listings/1506461039/full/berkshire0917580.JPG"><img src="http://rvs4less.com/images/listings/1506461039/full/berkshire0917580.JPG" /></a>
      </div>

      <div class="col-md-3">
        <a class="thumbnail gallery" href="http://rvs4less.com/images/listings/1506461039/full/berkshire0917582.JPG"><img src="http://rvs4less.com/images/listings/1506461039/full/berkshire0917582.JPG" /></a>
      </div>

      <div class="col-md-3">
        <a class="thumbnail gallery" href="http://rvs4less.com/images/listings/1503635405/full/76387091.jpg"><img src="http://rvs4less.com/images/listings/1503635405/full/76387091.jpg" /></a>
      </div>

      <div class="col-md-3">
        <a class="thumbnail gallery" href="http://rvs4less.com/images/listings/1486180430/full/72006972.jpg"><img src="http://rvs4less.com/images/listings/1486180430/full/72006972.jpg" /></a>
      </div>

      <div class="col-md-3">
        <a class="thumbnail gallery" href="http://rvs4less.com/images/listings/1503635077/full/terra3061710878.JPG"><img src="http://rvs4less.com/images/listings/1503635077/full/terra3061710878.JPG" /></a>
      </div>

      <div class="col-md-3">
        <a class="thumbnail gallery" href="http://rvs4less.com/images/listings/1506461039/full/berkshire0917580.JPG"><img src="http://rvs4less.com/images/listings/1506461039/full/berkshire0917580.JPG" /></a>
      </div>
  </div>
</div>