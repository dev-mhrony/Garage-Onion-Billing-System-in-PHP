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
$userid = $_GET['id'];
//echo $userid;exit;
if($_POST) {
	$edituserName = $_POST['edituserName'];
	$editPassword 		= md5($_POST['editPassword']);
	
	$sql = "UPDATE users SET username = '$edituserName', password = '$editPassword' WHERE user_id = $userid ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
		header('location:../users.php');
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating product info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
?>