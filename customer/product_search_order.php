<?php
include('../db_connect/db.php');	
require("auth.php");
	$p_id=$_GET['p_id'];
	$result = $db->prepare("SELECT * FROM product where p_id='$p_id'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$pname=$rows["name"];
		$qty=$rows["qty"];
		$prce=$rows["prce"];
		$FLog_Id=$rows["Log_Id"];		
	}
	
	$result = $db->prepare("select * from  farmer where Log_Id = '$FLog_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$fname=$row["name"];			
			$faddr=$row["addr"];
			$fphno=$row["phno"];
		}
	$CLog_Id=$_SESSION['SESS_CUST_ID'];
	$result = $db->prepare("select * from  customer where Log_Id = '$CLog_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$cname=$row["name"];			
			$caddr=$row["addr"];
			$cphno=$row["phno"];
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
                                    <h4>Add To Cart</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="action/cart_save.php" enctype="multipart/form-data" autocomplete="off">
                                        	<div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Name</label>
                                                    <input type="hidden" name="p_id" value="<?php echo $p_id;?>">
                                                    <input type="text" name="pname" class="form-control input-focus" value="<?php echo $pname;?>">
                                                    <input type="hidden" name="FLog_Id" value="<?php echo $FLog_Id;?>">                                                    <input type="hidden" name="fname" value="<?php echo $fname;?>">
                                                    <input type="hidden" name="faddr" value="<?php echo $faddr;?>">
                                                    <input type="hidden" name="fphno" value="<?php echo $fphno;?>">
                                                    
                                                    <input type="hidden" name="CLog_Id" value="<?php echo $CLog_Id;?>">
                                                    <input type="hidden" name="cname" value="<?php echo $cname;?>">
                                                    <input type="hidden" name="caddr" value="<?php echo $caddr;?>">
                                                    <input type="hidden" name="cphno" value="<?php echo $cphno;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Qty</label>
                                                    <input type="text" name="qty" class="form-control input-focus" value="<?php echo $qty;?>">
                                                </div>
                                                <div class="form-group col-lg-4">

                                                    <label>Price</label>
                                                    <input type="text" name="prce" class="form-control input-focus"  id="prce" value="<?php echo $prce;?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Buy</label>
                                            <input type="number" name="buy"  id="buy" class="form-control input-focus" max="<?php echo $qty;?>" min="0" onKeyUp="Calculate_Amt();">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Total</label>
                                                    <input type="text" name="tot" class="form-control input-focus" id="tot">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Date</label>
                                                    <input type="date" name="date" class="form-control input-focus">
                                                </div>
                                            </div>
                                            <div class="row">                      
                                                <div class="form-group col-lg-12">
                                                    <label>Notes</label>
                                                    <textarea name="desp" class="form-control input-focus" rows="1"></textarea>
                                                </div>
                                            </div>                                            
                                            <button type="submit" class="btn btn-danger">Cart</button>
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
<script>
function Calculate_Amt() {

	var prce = document.getElementById('prce').value;
	var buy = document.getElementById('buy').value;
	var tot = document.getElementById('tot').value;
	
	var tot=(parseFloat(prce)*parseFloat(buy));
	if(tot == ''){
		document.getElementById('tot').value =tot;	
	}	
	else if (!isNaN(tot)){		
		document.getElementById('tot').value = Math.round(tot);
	}
}
</script>
</html>