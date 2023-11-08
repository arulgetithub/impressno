<?php
  require('../includes/connection.php');
  require('../includes/global_members.php');
  
  if(isset($_POST['reg']))
  {
    $ufname	= trim($_POST['user-fname']); 
	$uemail	= trim($_POST['user-email']);
	$upass	= trim($_POST['user-pass']);
	$ucpass	= trim($_POST['user-cpass']);
	if($ufname == '')
	{
?>
	<script type="text/javascript">
                alert("First Name Cannot Be Blank!");
                window.location = "../index.php";
                </script>
<?php
	}
	else if($uemail == '')
	{
?>
	<script type="text/javascript">
                alert("Email ID Cannot Be Blank!");
                window.location = "../index.php";
                </script>
<?php
	}
	else if($upass == '')
	{
?>
	<script type="text/javascript">
                alert("Password Cannot Be Blank!");
                window.location = "../index.php";
                </script>
<?php
	}
	else if($upass <> $ucpass)
	{
?>
	<script type="text/javascript">
                alert("Password and Confirm Password doesn't Match!");
                window.location = "../index.php";
                </script>
<?php
	}
	else
	{
		mysqli_query($db, "INSERT INTO tbl_user_reg (user_fname, user_email, user_pwd) VALUES ('{$ufname}','{$uemail}',sha1('{$upass}'))");
?>
	<script type="text/javascript">
                alert("You have Sucessfully Registered!");
                window.location = "../index.php";
                </script>
<?php
	}
  }
  else
  {
    echo "<script>alert('Login Success!');</script>";
  }
?>