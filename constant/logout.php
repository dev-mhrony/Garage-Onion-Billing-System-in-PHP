<?php  
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
 
?>
<script>
window.location="../login.php";
</script>
<?php
//to redirect back to "index.php" after logging out
  exit;
?>

<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->