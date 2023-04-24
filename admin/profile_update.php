<?php
	include('../db_connect/db.php');	
	require("auth.php");

	$Log_Id=$_SESSION['SESS_ADMIN_ID'];
	$result = $db->prepare("select * from  admin where Log_Id = '$Log_Id'");
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
			$dsg=$row["dsg"];
			$wrk=$row["wrk"];
			$skls=$row["skls"];
			$quli=$row["quli"];
			$expr=$row["expr"];
			$photo=$row["photo"];			
		}
		
		$Log_Id=$_SESSION['SESS_ADMIN_ID'];
		$result = $db->prepare("select * from  user where Log_Id = '$Log_Id'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
			{						
				$password=$row["password"];								
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
                                    <li class="breadcrumb-item active">Profile</li>
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
                                    <h4>Profile Update</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="post" action="action/profile_update.php" enctype="multipart/form-data" autocomplete="off">
                                        	<div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Name</label>
                                                    <input type="text" name="name" readonly value="<?php echo $name;?>" class="form-control input-focus" required pattern="[a-zA-Z1 _]{3,50}">
                                                    <input type="hidden" name="Log_Id" value="<?php echo $Log_Id;?>">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Gender</label>
                                                    <select name="sex" class="form-control input-focus" required>
                                                    	<option><?php echo $sex;?></option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Transgender</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Age</label>
                                                    <input type="number" name="age" value="<?php echo $age;?>" min="18" max="80" required class="form-control input-focus">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Date Of Birth</label>
                                                    <input type="date" name="dob" value="<?php echo $dob;?>" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Location</label>
                                                    <input type="text" name="location" value="<?php echo $location;?>" class="form-control input-focus" required>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Address</label>
                                                    <textarea name="addr" class="form-control input-focus" rows="1" required><?php echo $addr;?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Email</label>
                                                    <input type="text" name="email" readonly value="<?php echo $email;?>" class="form-control input-focus">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Phone No</label>
                                                    <input type="text" name="phno" value="<?php echo $phno;?>"  required pattern="[0-9]{10,10}" maxlength="10" minlength="10" class="form-control input-focus">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Designation</label>
                                                    <textarea name="dsg" required class="form-control input-focus" rows="1"><?php echo $dsg;?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Work</label>
                                                    <input type="text" name="wrk" value="<?php echo $wrk;?>" required class="form-control input-focus">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Skill</label>
                                                    <input type="text" name="skls" value="<?php echo $skls;?>" required class="form-control input-focus">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Qualification</label>
                                                    <textarea name="quli" class="form-control input-focus" required rows="1"><?php echo $quli;?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label>Experience</label>
                                                    <textarea name="expr" class="form-control input-focus" required rows="6"><?php echo $expr;?></textarea>
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Password</label>
                                                    <input type="password" name="password" value="<?php echo $password;?>" minlength="4" maxlength="15" class="form-control input-focus">
                                                </div>
                                                <div class="form-group col-lg-4">
                                                    <label>Photo</label>
                                                    <input type="file" name="photo" class="form-control input-focus">
                                                </div>
                                            </div>                                            
                                            <button type="submit" class="btn btn-danger">Update</button>
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