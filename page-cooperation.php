
<?php

// require_once(PATH . 'wp-blog-header.php');
global $wpdb;

$$wpdb->get_results("SELECT id, name, phone, topic, acreage", ARRAY_A);

?>
