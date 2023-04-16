<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
<?php 
//session_start();
//include('../constant/check.php');?>
<?php 
//session_start();
include('./constant/check.php');
 include('./constant/connect.php');
?>
<div id="page"></div>
<div id="loading"></div>
    <div id="main-wrapper">
        
        <div class="header">
            <marquee class="d-lg-none d-block">
                <div class="ml-lg-5 pl-lg-5 ">
                  
                     <b id="ti" class="ml-lg-5 pl-lg-5"></b>
                   
                   
                    </div>
            </marquee>
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <b><img src="./assets/uploadImage/Logo/logo.png" style="width: 60%;" alt="homepage" class="dark-logo" style="width:100%;height:auto;"/></b>  
                    </a>
                </div>
                
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav mr-auto mt-md-0">                     
                    </ul>
                    <div class=" d-lg-block d-none">
                  
                     <b id="time" class=""></b>
                   
                   
                    </div>
                    <ul class="navbar-nav my-lg-0 ml-auto">
                      <div id="google_translate_element"></div> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <img src="./assets/uploadImage/Profile/avator.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                   <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                                     <li><a href="setting.php"><i class="fa fa-key"></i> Changed Password</a></li>
                                      <li><a href="users.php"><i class="fa fa-user"></i> Add user</a></li>
                                     <?php }?>
                               
                                    <li><a href="./constant/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div><!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a>
          </li>
          <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://www.youtube.com/@codecampbdofficial" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Client</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
              <a class="dropdown-item" href="add_client.php">Add Client</a>
              <a class="dropdown-item" href="client.php">Manage Client</a>
            </div>
          </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://www.youtube.com/@codecampbdofficial" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tag"></i> Brand</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
              <a class="dropdown-item" href="add-brand.php">Add Brand</a>
              <a class="dropdown-item" href="brand.php">Manage Brand</a>
              <a class="dropdown-item" href="importbrand.php">Import Brand</a>
            </div>
          </li>
            <?php }?>
 <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://www.youtube.com/@codecampbdofficial" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list"></i> Categories</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
              <a class="dropdown-item" href="add-category.php">Add Category</a>
              <a class="dropdown-item" href="categories.php">Manage Categories</a>
            </div>
          </li>
           <?php }?>
           <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://www.youtube.com/@codecampbdofficial" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs"></i> Parts</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
              <a class="dropdown-item" href="add-product.php">Add Parts</a>
              <a class="dropdown-item" href="product.php">Manage Parts</a>
            </div>
          </li>
          <?php }?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://www.youtube.com/@codecampbdofficial" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-files-o"></i> Invoices</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
              <a class="dropdown-item" href="add-order.php">Add Invoice</a>
              <a class="dropdown-item" href="Order.php">Manage Invoices</a>
            </div>
          </li>
             <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <li class="nav-item">
            <a class="nav-link" href="report.php"><i class="fa fa-flag"></i> Reports</a>
          </li>
<?php }?>
<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://www.youtube.com/@codecampbdofficial" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i> Setting</a>
            <div class="dropdown-menu" aria-labelledby="dropdown08">
              <a class="dropdown-item" href="manage_website.php">Web Management</a>
              <a class="dropdown-item" href="email_config.php">Email Management</a>
            </div>
          </li>
          <?php }?>
            <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                 <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.youtube.com/@codecampbdofficial"><i class="fa fa-info-circle"></i> About Author</a>
          </li>
          <?php }?>
        </ul>
      </div>
    </nav>

<!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->

<script language="javascript">
var today = new Date();
document.getElementById('ti').innerHTML=today;

var today = new Date();
document.getElementById('time').innerHTML=today;
 </script>