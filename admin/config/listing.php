<?php
/*
 * view - the path to the listing view that you want to display the data in
 * 
 * base_url - the url on which that pagination occurs. This may have to be modified in the 
 * 			controller if the url is like /product/edit/12
 * 
 * per_page - results per page
 * 
 * order_fields - These are the fields by which you want to allow sorting on. They must match
 * 				the field names in the table exactly. Can prefix with table name if needed
 * 				(EX: products.id)
 * 
 * OPTIONAL
 * 
 * default_order - One of the order fields above
 * 
 * uri_segment - this will have to be increased if you are paginating on a page like 
 * 				/product/edit/12
 * 				otherwise the pagingation will start on page 12 in this case 
 * 
 * 
 */
 
$config['inventory_index'] = array(
	"view"		=> 	'listing/listing',
	"init_scripts" => 'listing/init_scripts',
	"advance_search_view" => 'frontend/inventory/filter',
	"base_url"	=> 	'/inventory/index/',
	"per_page"	=>	"20",
	"fields"	=> array(   
						'id'=>array('name'=>'ID', 'data_type' => 'String', 'sortable' => true, 'default_view'=>1),
						'category'=>array('name'=>'Type', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'make'=>array('name'=>'Make', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'model'=>array('name'=>'Model', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'price'=>array('name'=>'Price', 'data_type' => 'money', 'sortable' => true, 'default_view'=>1),
						'year'=>array('name'=>'Year', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),),

	"default_order"	=> "id",
	"default_direction" => "DESC"
);

$config['users_index'] = array(
 "view"  =>  'listing/listing',
 "init_scripts" => 'listing/init_scripts',
 "advance_search_view" => 'frontend/users/filter',
 "base_url" =>  '/users/index/',
 "per_page" => "20",
 "fields" => array(   
      'name'=>array('name'=>'Name', 'data_type' => 'String', 'sortable' => true, 'default_view'=>1),
      'username'=>array('name'=>'User name', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
       'email'=>array('name'=>'Email id', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1)),

 "default_order" => "id",
 "default_direction" => "DESC"
);

$config['contact_index'] = array(
	"view"  =>  'listing/listing',
	"init_scripts" => 'listing/init_scripts',
	"advance_search_view" => 'frontend/contact/filter',
	"base_url" =>  '/contact/index/',
	"per_page" => "20",
	"fields" => array(   
	     'firstname'=>array('name'=>'First Name', 'data_type' => 'String', 'sortable' => true, 'default_view'=>1),
	     'lastname'=>array('name'=>'Last name', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
	     'phone'=>array('name'=>'Phone', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
	     'email'=>array('name'=>'Email id', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
		 'aboutus'=>array('name'=>'How did you hear about us?', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1)),

 "default_order" => "id",
 "default_direction" => "DESC"
);

$config['credit_index'] = array(
	"view"		=> 	'listing/listing',
	"init_scripts" => 'listing/init_scripts',
	"advance_search_view" => 'frontend/credit/filter',
	"base_url"	=> 	'/credit/index/',
	"per_page"	=>	"20",
	"fields"	=> array(   
						'id'=>array('name'=>'ID', 'data_type' => 'String', 'sortable' => true, 'default_view'=>1),
						'firstname'=>array('name'=>'First Name', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'email'=>array('name'=>'Email id', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'employer'=>array('name'=>'Employe Name', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'issue_date'=>array('name'=>'Issue Date', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),),

	"default_order"	=> "id",
	"default_direction" => "DESC"
);

$config['feedback_index'] = array(
	"view"		=> 	'listing/listing',
	"init_scripts" => 'listing/init_scripts',
	"advance_search_view" => 'frontend/feedback/filter',
	"base_url"	=> 	'/feedback/index/',
	"per_page"	=>	"20",
	"fields"	=> array(   
						'name'=>array('name'=>' Name', 'data_type' => 'string', 'sortable' => true, 'default_view'=>1),
						'feedback'=>array('name'=>'Comments', 'data_type' => 'substr', 'sortable' => true, 'default_view'=>1),
						'status'=>array('name'=>'Status', 'data_type' => 'status', 'sortable' => true, 'default_view'=>1),),

	"default_order"	=> "id",
	"default_direction" => "DESC"
);
$config['_index'] = array(
	"view"		=> 	'settings',
	"base_url"	=> 	'/settings/index/');

?>