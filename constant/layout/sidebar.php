 <?php 
 include('./constant/connect.php');
  

 ?>

 <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                         <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                             <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Client</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add_client.php">Add Client</a></li>
                           
                                <li><a href="client.php">Manage Client</a></li>
                            </ul>
                        </li>
                
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-tag"></i><span class="hide-menu">Brand</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-brand.php">Add Brand</a></li>
                           
                                <li><a href="brand.php">Manage Brand</a></li>
                                 <li><a href="importbrand.php">Import Brand</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">Add Category</a></li>
                           
                                <li><a href="categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cogs"></i><span class="hide-menu">Parts</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-product.php">Add Product</a></li>
                           
                                <li><a href="product.php">Manage Product</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-files-o"></i><span class="hide-menu">Invoices</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-order.php">Add Invoice</a></li>
                           
                                <li><a href="Order.php">Manage Invoices</a></li>
                            </ul>
                        </li>
                         
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Reports</span></a></li>
                        
<?php }?>
<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Setting</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                               <li><a href="manage_website.php">Web Management</a></li>
                           
                              <li><a href="email_config.php">Email Management</a></li>
                               
                            </ul>
                        </li> 
                  <?php }?>

                  <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="about.php" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">Know More</span></a></li>
                        
<?php }?>


                  <!-- /*!
* Author Name: MH RONY.
* GigHub Link: https://github.com/dev-mhrony
* Facebook Link:https://www.facebook.com/dev.mhrony
* Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
* Visit My Website : developerrony.com
*/ -->


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        