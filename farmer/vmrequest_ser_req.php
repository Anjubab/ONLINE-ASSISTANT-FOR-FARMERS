<?php
include('../db_connect/db.php');	
require("auth.php");
	$m_id=$_GET['m_id'];
	$result = $db->prepare("SELECT * FROM machine where m_id='$m_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$name=$rows["name"];
		$vcno=$rows["vcno"];
		$VFLog_Id=$rows["Log_Id"];
		$vmodel=$rows["vmodel"];
		$vrate=$rows["vrate"];
		$cntno1=$rows["cntno1"];
		$cmpny=$rows["cmpny"];
		$vtype=$rows["vtype"];
	}
	
	$Log_Id=$_SESSION['SESS_FARMER_ID'];
	$result = $db->prepare("select * from  farmer where Log_Id = '$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$fname=$row["name"];			
			$faddr=$row["addr"];
			$fphno=$row["phno"];
		}
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
                                    <h4>Vehicle Request Update</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="action/rent_vrequestm.php" enctype="multipart/form-data">
                                        	<div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Name</label>
                                                    <input type="text" name="vname" class="form-control input-focus" value="<?php echo $name;?>">
                                                    <input type="hidden" name="VFLog_Id" value="<?php echo $VFLog_Id;?>">
                                                    
                                                    <input type="hidden" name="FLog_Id" value="<?php echo $Log_Id;?>">
                                                    <input type="hidden" name="fname" value="<?php echo $fname;?>">
                                                    <input type="hidden" name="faddr" value="<?php echo $faddr;?>">
                                                    <input type="hidden" name="fphno" value="<?php echo $fphno;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Model</label>
                                                    <input type="text" name="vmodel" class="form-control input-focus" value="<?php echo $vmodel;?>">
                                                </div>
                                                <div class="form-group col-lg-4">

                                                    <label>Type</label>
                                                    <input type="text" name="vtype" class="form-control input-focus" value="<?php echo $vtype;?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Company</label>
                                                    <input type="text" name="cmpny" class="form-control input-focus" value="<?php echo $cmpny;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Rate</label>
                                                    <input type="text" name="vrate" class="form-control input-focus" value="<?php echo $vrate;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Vehicle No</label>
                                                    <input type="text" name="vcno" class="form-control input-focus" value="<?php echo $vcno;?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Phone No</label>
                                             <input type="text" name="cntno1" class="form-control input-focus" value="<?php echo $cntno1;?>">
                                                </div>    
                                                 <div class="form-group col-lg-4">
                                                    <label>Date</label>
                                            		 <input type="date" name="ndate" class="form-control input-focus">
                                                </div>                                              
                                                <div class="form-group col-lg-4">
                                                    <label>Description</label>
                                                    <textarea name="desp" class="form-control input-focus" rows="1"></textarea>
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