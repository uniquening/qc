<?php
/*
Template Name Pages: 合作意向(common problem)
*/


echo "<pre>";
print_r($_POST);
echo "</pre>"; 
require get_template_directory() . '/functions.php';
cooperation_update($data);

// echo $id;
// if (!is_numeric($id)) {
// 	die("参数id错误");
// }
// global $wpdb;
// $data = [
// 	'name' => esc_sql($_POST['name']),
// 	'phone' => esc_sql($_POST['phone']),
// 	'topic' => esc_sql($_POST['topic']),
// 	'acreage' => esc_sql($_POST['acreage'])
// ];
// echo "<pre>";
// print_r($data);
// echo "</pre>";
// echo $data['name'];
// // $condition['id'] = $id;

// $result = $wpdb->update($wpdb->prefix . "cooperation", $data);
// $redirect_url = '?page=cooperation%2Fcooperation.php';
// echo '<script>alert("提交成功！"); window.location.href="'.$redirect_url.'"</script>';
?>