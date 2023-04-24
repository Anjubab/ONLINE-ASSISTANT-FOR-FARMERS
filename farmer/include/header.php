<?php
	$Log_Id=$_SESSION['SESS_FARMER_ID'];
	$result = $db->prepare("select * from  user where Log_Id = '$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
		{						
			$farname=$row["name"];			
		}
?>	
    <div class="dropdown dib">
        <div class="header-icon" data-toggle="dropdown">
            <i class="ti-bell"></i>
            <div class="drop-down dropdown-menu dropdown-menu-right">
                <div class="dropdown-content-heading">
                    <span class="text-left">Recent Notifications</span>
                </div>
                <div class="dropdown-content-body">
                    <ul>
					<?php 
						$result = $db->prepare("select * from notification limit 2");
						$result->execute();
						for($i=1; $row = $result->fetch(); $i++)
						{
						?>                    
                        <li>
                            <a href="notification_view.php">
                                <img class="pull-left m-r-10 avatar-img"
                                    src="../assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                    <small class="notification-timestamp pull-right"><?php echo $row["date"]?></small>
                                    <div class="notification-heading"><?php echo $row["name"]?></div>
                                    <div class="notification-text"><?php echo $row["subj"]?> </div>
                                </div>
                            </a>
                        </li>
                        <?php
						}
						?>                                            
                        <li class="text-center">
                            <a href="notification_view.php" class="more-link">See All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
                        
    <div class="dropdown dib">
        <div class="header-icon" data-toggle="dropdown">
            <i class="ti-email"></i>
            <div class="drop-down dropdown-menu dropdown-menu-right">
                <div class="dropdown-content-heading">
                    <span class="text-left">2 New Messages</span>
                    <a href="email.html">
                        <i class="ti-pencil-alt pull-right"></i>
                    </a>
                </div>
                <div class="dropdown-content-body">
                    <ul>
                    <?php 
						$result = $db->prepare("select * from message where Log_Id='$Log_Id' and stats='Accept' limit 2");
						$result->execute();
						for($i=1; $row = $result->fetch(); $i++)
						{
						?>   
                        <li>
                            <a href="message_inbox.php">
                                <img class="pull-left m-r-10 avatar-img"
                                    src="../assets/images/avatar/3.jpg" alt="" />
                                <div class="notification-content">
                                    <small class="notification-timestamp pull-right"><?php echo $row["date"]?></small>
                                    <div class="notification-heading"><?php echo $row["name"]?></div>
                                    <div class="notification-text"><?php echo $row["subj"]?> </div>
                                </div>
                            </a>
                        </li>
                        <?php
						}
						?>
                        <li class="text-center">
                            <a href="message_inbox.php" class="more-link">See All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="dropdown dib">
        <div class="header-icon" data-toggle="dropdown">
            <span class="user-avatar"><?php echo $farname;?>
                <i class="ti-angle-down f-s-10"></i>
            </span>
            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">                                    
                <div class="dropdown-content-body">
                    <ul>
                        <li>
                            <a href="profile.php">
                                <i class="ti-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>