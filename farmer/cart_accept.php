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
                                    <li class="breadcrumb-item active">Search</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                 	<!-- Section Start -->
                    <?php
						$result = $db->prepare("SELECT * FROM cart where FLog_Id='$Log_Id' and stats='accept'");
						$result->execute();
						$row_count =  $result->rowcount();
						for($i=0; $rows = $result->fetch(); $i++)
						{
					?>
                     <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Product Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4"> 
                                        	<img src="../vphoto/<?php echo $rows["photo"];?>" class="img-fluid thumbnail m-r-15"> 
                                        </div>
                                        <div class="col-md-8"> 
	                                        	<b>Name   </b><span style="padding-left:19%;"><?php echo $rows["pname"];?></span><br>
                                                <b>Buy   </b><span style="padding-left:23%;"><?php echo $rows["buy"];?><br>
                                                <b>Price   </b><span style="padding-left:21%;"><?php echo $rows["prce"];?><br>
                                                <b>Total   </b><span style="padding-left:21%;"><?php echo $rows["tot"];?><br>
                                                <hr>
                                                <p>Contact <br> <?php echo $rows["fphno"];?></p>
                                                 <hr>
                                                <p>Status <br> <?php echo $rows["stats"];?></p>
                                               <?php if($rows["stats"]=='Pending')
											   	{
											   ?>                                                
                                            <a  href="cart_view_st.php<?php echo '?cart_id='.$rows["cart_id"]; ?>" class="btn btn-bg btn-danger pull-right">Status</a>
                                            <?php }?>                                            
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