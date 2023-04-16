<?php
session_start();
//echo $_SESSION['alogin'];exit;
if(!isset($_SESSION['login']))
{
	//echo $_SESSION['alogin'];exit;
	header("location:login.php");


}
?><!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
