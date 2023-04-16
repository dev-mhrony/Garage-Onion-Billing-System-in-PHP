
<?php include('./constant/layout/head.php');?>
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->

<?php include('./constant/layout/header.php');?>

<?php //include('./constant/layout/sidebar.php');?> 
<link rel="stylesheet" href="assets/css/popup_style.css">
 <?php
//session_start();
//error_reporting(0);
include('./constant/connect1.php');
if(isset($_POST["btn_mail"]))
{
  extract($_POST);
 

  
   $q1="UPDATE `tbl_email_config` SET `name`='$name',`mail_driver_host`='$mail_driver',`mail_port`='$mail_port' ,`mail_username`='$mail_username',`mail_password`='$mail_password',`mail_encrypt`='$mail_encryption'";
  $q2=$conn->query($q1);
  ?>
  <script>
  window.location = "email_config.php";
  </script>
  <?php
}

?>

<?php
$que="select *from tbl_email_config";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
  //print_r($row);
  extract($row);
  $mail_password = $row['mail_password'];
  $mail_driver = $row['mail_driver_host'];
  $name = $row['name'];
  $mail_port = $row['mail_port'];
  $mail_username = $row['mail_username'];
  $mail_encryption = $row['mail_encrypt'];
}

?> 
   


  
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Email Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Email Management</li>
                    </ol>
                </div>
            </div>
            
            
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->

<div class="container-fluid">
                
                <marquee direction="left" behavior="alternate" scrollamount="1">
                  <h3 style="color:red"><b>Alert : Do not sell or publish this script with your name. But you can use it for academic learning purposes! The sole owner of this code is <a href="https://www.youtube.com/@codecampbdofficial" target="_blank">Code Camp BD</a>.</b></h3>
               </marquee>
                
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  value="<?php echo $name;?>"  name="name" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mail Driver Mail Host</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  value="<?php echo $mail_driver;?>"  name="mail_driver" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mail Port</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo $mail_port;?>"  name="mail_port" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mail Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo $mail_username;?>"  name="mail_username" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mail Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password"  value="<?php echo $mail_password;?>" name="mail_password" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                           <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mail Encryption</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="<?php echo $mail_encryption;?>"  name="mail_encryption" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="btn_mail" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               
                
<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
<?php include('./constant/layout/footer.php');?>
