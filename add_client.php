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

 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Client</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Client</li>
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
                                    <form class="form-horizontal" method="POST"  id="submitProductForm" action="php_action/createclient.php" method="POST" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                      
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="name" placeholder=" Name" name="name" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Gender</label>
                                                <div class="col-sm-9">
                                                                                                  <select class="form-control" id="brandName" name="gender">
                                                                                                    <option value="Female">Female</option>
                                                                                                    <option value="Male">Male</option>
</select></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mobile No
</label>
                                                <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="" name="mob_no" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Reffering</label>
                                                <div class="col-sm-9">
                                                                                                    <input type="text" class="form-control" id="" placeholder="" name="reffering" autocomplete="off" required="" />

                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                                                                    <textarea type="text" class="form-control" id="" placeholder="" name="address" autocomplete="off" required="" style="height: 150px;"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                  
                                  
                                        <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
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


