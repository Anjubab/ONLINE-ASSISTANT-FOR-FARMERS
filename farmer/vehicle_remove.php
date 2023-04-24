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
                               
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                 
                                    <li class="breadcrumb-item active">Remove</li>
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
                                <div class="card-title pr">
                                    <h4>All Vehicles</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Vehicle No</th>
                                                    <th>Name</th>
                                                    <th>Model</th>
                                                    <th>Rate</th>
                                                    <th>Contact</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $result = $db->prepare("select * from vehicle where Log_Id = '$Log_Id'");
                                                $result->execute();
                                                for($i=1; $row = $result->fetch(); $i++)
                                                {
                                                    echo"<tr>";
                                                        echo"<td>".$i."</td>";
                                                        echo"<td>".$row["vcno"]."</td>";
                                                        echo"<td>".$row["name"]."</td>";
                                                        echo"<td>".$row["vmodel"]."</td>";
                                                        echo"<td>".$row["vrate"]."</td>";
                                                        echo"<td>".$row["cntno1"]."</td>";
														echo"<td>".$row["vtype"]."</td>";														
                                                    ?>
                                                    <td>
                                                    <a href="action/vehicle_remove.php<?php echo '?v_id='.$row["v_id"]; ?>" class="btn btn-danger btn-out-dashed btn-block">Remove</a>
                                                    </td>
                                                    <?php
                                                        echo"</tr>";
                                                }
                                            ?>
										</tbody>
									</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
					
                    <?php include("include/footer.php");?>
                </section>
            </div>
        </div>
    </div>
	<?php include("include/js.php");?>    
</body>

</html>