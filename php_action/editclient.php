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
$id = $_GET['id'];
//echo $brandId;exit;
if($_POST) {	
//echo "123";exit;
	 $name = $_POST['name']; 
    $reffering = $_POST['reffering']; 
        $address = $_POST['address']; 
                $gender = $_POST['gender']; 
                $mob_no = $_POST['mob_no']; 


//echo $brandId;exit;
	$sql = "UPDATE tbl_client SET name = '$name', reffering = '$reffering',address = '$address', gender = '$gender',mob_no = '$mob_no' WHERE id = '$id'";
//echo $sql;exit;
	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		header('location:../client.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST