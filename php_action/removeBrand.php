<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->

<?php 	

require_once 'core.php';


//$valid['success'] = array('success' => false, 'messages' => array());

$brandId = $_GET['id'];
//echo $brandId;exit;

if($brandId) { 

 $sql = "UPDATE brands SET brand_status = 2 WHERE brand_id = {$brandId}";
//echo $sql;exit;
 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../Brand.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 	header('location:../removeBrand.php');
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST