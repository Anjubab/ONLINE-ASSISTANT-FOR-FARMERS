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
    <title>Farmer Friend</title>
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
                                    <h4>Vehicle Add</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="action/vehicle_post.php" enctype="multipart/form-data" autocomplete="off">
                                        	<div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control input-focus" required>
                                                    <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Year of Model</label>
                                                    <input type="text" name="vmodel" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Type</label>
                                                    <input type="text" name="vtype" class="form-control input-focus" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Company</label>
                                                    <input type="text" name="cmpny" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Rate</label>
                                                    <input type="number" name="vrate" class="form-control input-focus" required min="0" step="0.01">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Vehicle No</label>
                                                    <input type="text" name="vcno" class="form-control input-focus" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Phone No</label>
                                                    <input type="text" name="cntno1" class="form-control input-focus" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
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