

<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->



<link rel="stylesheet" href="assets/css/popup_style.css"> 
           <style>
.footer1 {
  position: fixed;
  bottom: 0;
  width: 100%;
  color: #5c4ac7;
  text-align: center;
}

</style>



   <?php
   
include('./constant/layout/head.php');
  include('./constant/connect.php');
session_start();

if(isset($_SESSION['userId'])) {
 //header('location:'.$store_url.'login.php');   
}

$errors = array();

if($_POST) {    

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) || empty($password)) {
    if($username == "") {
      $errors[] = "Username is required";
    } 

    if($password == "") {
      $errors[] = "Password is required";
    }
  } else {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $connect->query($sql);

    if($result->num_rows == 1) {
      $password = md5($password);
      // exists
      $mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $mainResult = $connect->query($mainSql);

      if($mainResult->num_rows == 1) {
        $value = $mainResult->fetch_assoc();
        $user_id = $value['user_id'];

        // set session
        $_SESSION['userId'] = $user_id;?>

      

         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p>Login Successfully</p>
    <p>
     
     <?php echo "<script>setTimeout(\"location.href = 'dashboard.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
     <?php  }  
      else{
        ?>


        <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Incorrect username/password combination</p>
    <p>
      <a href="login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>
       
      <?php } // /else
    } else { ?> 
        <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Username doesnot exists</p>
    <p>
      <a href="login.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div>  
         
    <?php } // /else
  } // /else not empty username // password
  
} // /if $_POST

?>
    
    <div id="main-wrapper">
        <div class="unix-login">
<div class="container-fluid" style="background-image: url('./assets/uploadImage/Logo/01.jpg');
background-color: #cccccc;  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;   height: 100%;"">

            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <div class="login-content">
                            <div class="login-form">
                                <center><img src="assets/uploadimage/Logo/logo.png" style="width: 60%;"></center><br>
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm" class="row">
                                    <div class="form-group col-md-12">
                                        <label lass="control-label">Username</label>
                                        <input type="text" name="username" id="username" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-control" placeholder="Username" required="">
     
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                     <div class="col-md-6 form-check">
                                            <input type="checkbox" class="pl-3" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <div class="forgot-phone col-md-6 text-right">
                                            <a href="#" class="text-right f-w-600 "> Forgot Password?</a>
                                        </div>
                                 
                                   <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
                                    <button type="submit" name="login" class="f-w-600 btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <br>
                                    
                                           <p style="color: red; font-size: 16px;">
                                           <b>Contact me for any Project Development : developer.mhrony@gmail.com</b>
                                           </p>  
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <script src="./assets/js/lib/jquery/jquery.min.js"></script>
    
    <script src="./assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="./assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="./assets/js/jquery.slimscroll.js"></script>
    
    <script src="./assets/js/sidebarmenu.js"></script>
    
    <script src="./assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <script src="./assets/js/custom.min.js"></script>
</body>

</html>
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->