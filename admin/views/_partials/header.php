<?php if(get_current_user_id() === FALSE):?>

<header class="brdr_bot">
    <div class="container">
        <div class="row text-center">
            Login
        </div>
    </div>
</header>

<?php else:?>

<div class="page-container">
  <div class="page-header md-shadow-z-1-i navbar">
    <div class="page-header-inner">
      <!-- BEGIN LOGO -->
      <div class="page-logo">      
        <h3 style="color: white;">RVMAX</h3>    
        <div class="menu-toggler sidebar-toggler hide">
          <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
        </div>
      </div>
      <!-- END LOGO -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
      </a>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
         
          <?php
            $profile = get_user_data();         
          ?>
          <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <img alt="" class="img-circle" src=""/>
            <span class="username username-hide-on-mobile">
            Welcome <?=$profile['name'];?> </span>
            <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li>
                <a href="<?=site_url('login/logout');?>">
                <i class="icon-key"></i> Log Out </a>
              </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
          <!-- BEGIN QUICK SIDEBAR TOGGLER -->
          <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
          <li class="dropdown dropdown-quick-sidebar-toggler">
            <a href="<?=site_url('login/logout');?>" class="dropdown-toggle">
            <i class="fa fa-power-off"></i>
            </a>
          </li>
          <!-- END QUICK SIDEBAR TOGGLER -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
  </div>
  <div class="page-sidebar-wrapper">
    <?php 
      $uri = $this->uri->segment(1);
      $uri1 = $this->uri->segment(2);
    ?>
    <div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="sidebar-toggler-wrapper">
          <div class="sidebar-toggler">
          </div>
        </li>
        <li class="start <?=($uri=='home')?'active':'';?>">
          <a href="<?=site_url('home');?>">
          <i class="fa fa-home"></i>
          <span class="title">Home</span>
          <?=($uri=='home')?"<span class='selected'></span>":"";?>
          </a>
        </li>
        <li class="start <?=($uri=='inventory')?'active':'';?>">
          <a href="<?=site_url('inventory');?>">
          <i class="fa fa-shopping-cart"></i>
          <span class="title">Inventory</span>
          <?=($uri=='inventory')?"<span class='selected'></span>":"";?>
          </a>
        </li>
        <li class="start <?=($uri=='users')?'active':'';?>">
          <a href="<?=site_url('users');?>">
          <i class="fa fa-users"></i>
          <span class="title">Users</span>
          <?=($uri=='users')?"<span class='selected'></span>":"";?>
          </a>
        </li>
        <li class="start <?=($uri=='contact')?'active':'';?>">
          <a href="<?=site_url('contact');?>">
          <i class="fa fa-phone"></i>
          <span class="title">Contact</span>
          <?=($uri=='contact')?"<span class='selected'></span>":"";?>
          </a>
        </li>
        <li class="start <?=($uri=='credit')?'active':'';?>">
          <a href="<?=site_url('credit');?>">
          <i class="fa-credit-card"></i>
          <span class="title">Credit Application</span>
          <?=($uri=='credit')?"<span class='selected'></span>":"";?>
          </a>
        </li>
        <li class="start <?=($uri=='feedback')?'active':'';?>">
          <a href="<?=site_url('feedback');?>">
          <i class="fa fa-comments" aria-hidden="true"></i>
          <span class="title">Feedback Form</span>
          <?=($uri=='feedback')?"<span class='selected'></span>":"";?>
          </a>
        </li>
        <li class="start <?=($uri=='settings')?'active':'';?>">
          <a href="<?=site_url('settings/index')?>">
          <i class="fa fa-globe" aria-hidden="true"></i>
          <span class="title">Seo Settings</span>
          <?=($uri=='settings')?"<span class='selected'></span>":"";?>
          </a>
        </li>
      </ul>
    </div>
  </div>
<?php endif;?>