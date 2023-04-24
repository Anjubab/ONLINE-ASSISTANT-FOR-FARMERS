<?php
include('../db_connect/db.php');	
require("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farm Friend</title>
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
                                    <li class="breadcrumb-item active">Home</li>
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
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Farmers</div>
                                        <div class="stat-digit">
                                         <?php
												$result = $db->prepare("select count(*) from user where utype='Farmer'");
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++)
												{
													echo"".$row['count(*)']."";
												}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Labors</div>
                                        <div class="stat-digit">
                                       <?php
												$result = $db->prepare("select count(*) from user where utype='Labor'");
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++)
												{
													echo"".$row['count(*)']."";
												}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user  color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Agents</div>
                                        <div class="stat-digit">
                                        <?php
												$result = $db->prepare("select count(*) from user where utype='Agent'");
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++)
												{
													echo"".$row['count(*)']."";
												}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-truck color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Vehicles</div>
                                        <div class="stat-digit">
                                       <?php
												$result = $db->prepare("select count(*) from vehicle");
												$result->execute();
												for($i=0; $row = $result->fetch(); $i++)
												{
													echo"".$row['count(*)']."";
												}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Section End -->                   

                 <section id="main-content">
                 	<!-- Section Start -->
                    <?php
					
						$result = $db->prepare("SELECT * FROM product");
						$result->execute();
						$row_count =  $result->rowcount();
						for($i=0; $rows = $result->fetch(); $i++)
						{
					?>
                     <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Machine Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4"> 
                                        	<img src="../vphoto/<?php echo $rows["photo"];?>" class="img-fluid thumbnail m-r-15"> 
                                        </div>
                                        <div class="col-md-8"> 
	                                        	<b>Name   </b><span style="padding-left:19%;"><?php echo $rows["name"];?></span><br>
                                                <b>Available   </b><span style="padding-left:11%;"><?php echo $rows["qty"];?><br>
                                                <b>Rate   </b><span style="padding-left:21%;"><?php echo $rows["prce"];?><br>
                                                <hr>
                                                <p>Description <br> <?php echo $rows["desp"];?></p>
                                            <a  href="product_search_order.php<?php echo '?p_id='.$rows["p_id"]; ?>" class="btn btn-bg btn-danger pull-right">Order</a>
                                        </div>
                                    </div>
                                    
                               
                                </div>
                            </div>
                        </div>
                      </div>
                           <?php
							}
							?>
                  	<!-- Section End -->
					
                    <?php include("include/footer.php");?>
                </section>
            </div>
        </div>
    </div>
	<?php include("include/js.php");?>    
</body>

</html>