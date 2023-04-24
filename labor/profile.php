<?php
	include('../db_connect/db.php');	
	require("auth.php");

	$Log_Id=$_SESSION['SESS_LABOR_ID'];
	$result = $db->prepare("select * from  labor where Log_Id = '$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$name=$row["name"];			
			$sex=$row["sex"];
			$age=$row["age"];
			$dob=$row["dob"];
			$location=$row["location"];
			$addr=$row["addr"];
			$email=$row["email"];
			$phno=$row["phno"];
			$ftype=$row["ftype"];
			$wrk=$row["wrk"];
			$skls=$row["skls"];
			$quli=$row["quli"];
			$expr=$row["expr"];
			$photo=$row["photo"];			
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
                                    <li class="breadcrumb-item active">Details</li>
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
                            <div class="card-body">
                              <div class="user-profile">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="user-photo m-b-30">
                                       <?php 
									   	if($photo=="")
										{
									   ?>		
                                      <img class="img-fluid" src="../assets/images/user-profile.jpg" alt="" />
                                      <?php
										}
										else
										{
									  ?>
                                      <img class="img-fluid" src="../photo/<?php echo $photo;?>" alt="" />
                                      <?php
									  	}
									  ?>
                                    </div>
                                    <div class="user-work">
                                      <h4>Work Experience</h4>
                                      <div class="work-content">
                                        <h3>Details</h3>
                                        <p><?php echo $wrk;?></p>
                                      </div>                                      
                                    </div>
                                    <div class="user-skill">
                                      <h4>Farm Type</h4>
                                      <ul>
                                        <li>
                                          <a href="#"><?php echo $ftype;?></a>
                                        </li>                                       
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="col-lg-8">
                                    <div class="user-profile-name"><?php echo $name;?></div>
                                    <div class="user-Location">
                                      <i class="ti-location-pin"></i> <?php echo $addr;?></div>
                                    <div class="user-send-message">
                                      <a href="profile_update.php" class="btn btn-primary btn-addon" style="color:white;">
                                        <i class="ti-user"></i>Profile Update</a>
                                    </div>  
                                    <div class="custom-tab user-profile-tab">
                                      <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                          <a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a>
                                        </li>
                                      </ul>
                                      <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                          <div class="contact-information">
                                            <h4>Contact information</h4>
                                            <div class="phone-content">
                                              <span class="contact-title">Phone:</span>
                                              <span class="phone-number"><?php echo $phno;?></span>
                                            </div>
                                            <div class="address-content">
                                              <span class="contact-title">Address:</span>
                                              <span class="mail-address"><?php echo $addr;?></span>
                                            </div>
                                            <div class="email-content">
                                              <span class="contact-title">Location:</span>
                                              <span class="contact-email"><?php echo $location;?></span>
                                            </div>
                                            <div class="email-content">
                                              <span class="contact-title">Email:</span>
                                              <span class="contact-email"><?php echo $email;?></span>
                                            </div>                                            
                                          </div>
                                          <div class="basic-information">
                                            <h4>Basic information</h4>
                                            <div class="birthday-content">
                                              <span class="contact-title">Birthday:</span>
                                              <span class="birth-date"><?php echo $dob;?> </span>
                                            </div>
                                            <div class="gender-content">
                                              <span class="contact-title">Gender:</span>
                                              <span class="gender"><?php echo $sex;?></span>
                                            </div>
                                            <div class="gender-content">
                                              <span class="contact-title">Age:</span>
                                              <span class="gender"><?php echo $age;?></span>
                                            </div>
                                            <div class="gender-content">
                                              <span class="contact-title">Qualification:</span>
                                              <span class="gender"><?php echo $quli;?></span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
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