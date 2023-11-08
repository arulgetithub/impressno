<?php

	require('../includes/connection.php');
	require('../pages/session.php');
	require('../includes/global_members.php');
	
	date_default_timezone_set('Asia/Kolkata');
	$currentDateTime = new DateTime('now');
	$currentDate = date("y-m-d h:i:s");

	if(isset($_POST['log']))
	{
		$user = trim($_POST['uname']);
		$pass = trim($_POST['upass']);
		$h_upass = sha1($pass);

		if($user == '')
		{
			alert_msg("User Name Cannot Be Blank","../index.php");
		}
		elseif($pass == '')
		{
			alert_msg("Password Cannot Be Blank","../index.php");
		}
		else
		{
			$sql = "SELECT * FROM tbl_user_reg WHERE user_email='".$user."' AND user_pwd = '".$h_upass."'";
			
			$result = $db->query($sql);
				
			if($result)
			{
				if($result->num_rows > 0)
				{
					$found_user = mysqli_fetch_array($result);
				
					$_SESSION['MEMBER_ID'] = $found_user['user_cust_id'];
					$_SESSION['MEMBER_FNAME'] = $found_user['user_fname'];
					$_SESSION['MEMBER_EMAIL'] = $found_user['user_email'];
					$_SESSION['MEMBER_TYPE'] = $found_user['user_type'];
					
					mysqli_query($db, "INSERT INTO tbl_user_log (user_id, user_login_datetime,log_status) VALUES ('{$_SESSION['MEMBER_ID']}', '{$currentDate}','Active')");
					
					$sql = "SELECT max(user_log_id) as usr_log_id, log_status FROM tbl_user_log WHERE user_id = ".$_SESSION['MEMBER_ID'];
					
					$result = $db->query($sql);
				
					if($result)
					{
						if($result->num_rows > 0)
						{
							$found_user = mysqli_fetch_array($result);
							
							$_SESSION['MEMBER_LOG_ID'] = $found_user['usr_log_id'];
							$_SESSION['MEMBER_LOG_STATUS'] = $found_user['usr_log_id'];
						}
					}
					alert_msg($_SESSION['MEMBER_FNAME']." Welcome!","../pages/product.php");
				}
				else
				{
					alert_msg("Username or Password Not Registered! Contact Your administrator.","../index.php");
				}
			}
			else
			{
				alert_msg("Username or Password Not Registered! Contact Your administrator.","../index.php");
			}
		}
	}
?>