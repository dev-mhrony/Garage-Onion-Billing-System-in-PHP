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

<?php include('./constant/connect.php');

$sql="SELECT * from categories where  categories_id='".$_GET['id']."'";
  $result=$connect->query($sql)->fetch_assoc();  ?>    
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Categories Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Categories</li>
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
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/editCategories.php?id=<?php echo $_GET['id'];?>"enctype="multipart/form-data">

                                   
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Categories Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text"  class="form-control"id="categoriesName" placeholder="Categories Name" name="categoriesName"  value="<?php echo $result['categories_name']?>"required="" pattern="^[a-zA-z]+$"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Status</label>
                                                <div class="col-sm-9">
                                                     <select class="form-control" id="categoriesStatus" name="categoriesStatus">
                        <option value="1" <?php 
                                                        if($result['categories_active']=="1") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Available</option>
                                                        <option value="2" <?php if($result['categories_active']=="2"){ echo "selected";}?>>Not Available</option>
                      </select>

                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
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


