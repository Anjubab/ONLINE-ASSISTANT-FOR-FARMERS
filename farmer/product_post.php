<?php
include('../db_connect/db.php');	
require("auth.php");
$Log_Id=$_SESSION['SESS_FARMER_ID'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Snow</title>
    <?php include("include/css.php");?>    
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <?php include("include/leftmenu.php");?>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                       <?php include("include/header.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Vehicle</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                 	<!-- Section Start -->
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Product Post</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="action/product_post.php" enctype="multipart/form-data" autocomplete="off">
                                        	<div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control input-focus" required>
                                                    <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Quantity</label>
                                                    <input type="text" name="qty" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Price</label>
                                                    <input type="text" name="prce" class="form-control input-focus" required>
                                                </div>
                                            </div>                                            
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Photo</label>
                                                    <input type="file" name="photo" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Description</label>
                                                    <textarea name="desp" class="form-control input-focus" rows="1" required></textarea>
                                                </div>
                                            </div>                                            
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  	<!-- Section End -->
                    <?php include("include/footer.php");?>
                </section>
            </div>
        </div>
    </div>
	<?php include("include/js.php");?>    
</body>

</html>