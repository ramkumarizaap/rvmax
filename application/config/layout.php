<?php

//
// Layout config for the site admin 
//
                                        
$config['layout']['default']['template'] = 'layouts/frontend';
$config['layout']['default']['title']    = 'Rvmax - Home';
$config['layout']['default']['js_dir']    = "assets/js/frontend";
$config['layout']['default']['css_dir']   = "assets/css/frontend";
$config['layout']['default']['img_dir']   = "assets/img";

$config['layout']['default']['javascripts'] = array('modernizr-2.8.3','lib/jquery.min','lib/jquery.mmenu.all.min','lib/bootstrap.min','lib/slick.min','lib/jquery-ui.min','lib/featherlight.min','lib/featherlight.gallery.min','custom');
 
$config['layout']['default']['stylesheets'] = array('style');

$config['layout']['default']['description'] = '';
$config['layout']['default']['keywords']    = '';

$config['layout']['default']['http_metas'] = array(
    'Content-Type' => 'text/html; charset=utf-8',
	'viewport'     => 'width=device-width, initial-scale=1.0',
    'author' => 'Order Processing',
);


?>
