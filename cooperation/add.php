<?php
	echo "<pre>";
	print_r($_POST);
	echo "</pre>"; 
	define('PATH', dirname(dirname(dirname(dirname(dirname(__FILE__))))).'\\');
	require_once(PATH . 'wp-blog-header.php');
	global $wpdb;
	// require(ABSPATH . 'wp-admin/includes/upgrade.php');
	$data = array(
	    'name' => $_POST['name'],
	    'phone' => $_POST['phone'],
	    'topic' => $_POST['topic'],
	    'acreage' => $_POST['acreage']
	);

	$wpdb->insert($wpdb->prefix . "cooperation", $data);

?>
