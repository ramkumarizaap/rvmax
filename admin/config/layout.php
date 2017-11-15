<?php
//
// Layout config for the site admin 
//
$config['layout']['default']['template'] = 'layouts/frontend';
$config['layout']['default']['title']    = 'RVMAX - Admin';
$config['layout']['default']['js_dir']   = "assets/js/admin";
$config['layout']['default']['css_dir']  = "assets/css/admin";
$config['layout']['default']['img_dir']  = "assets/img";
$config['layout']['default']['javascripts'] = array('jquery.min','bootstrap.min','bootstrap-datepicker.min','metronic','layout','function','jquery-te-1.4.0.min');
$config['layout']['default']['stylesheets'] = array('bootstrap.min','bootstrap-datepicker3.min','font-awesome.min','components','layout','darkblue','custom','jquery-te-1.4.0');
$config['layout']['default']['description'] = '';
$config['layout']['default']['keywords']    = '';
$config['layout']['default']['http_metas'] = array(
	'X-UA-Compatible' => 'IE=edge',
  'Content-Type' => 'text/html; charset=utf-8',
	'viewport' => 'width=device-width, initial-scale=1.0',
  'author' => 'Puppies - Admin');
?>