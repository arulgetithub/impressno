<?php

require('../includes/connection.php');
require('../pages/session.php');
require('../includes/global_members.php');

date_default_timezone_set('Asia/Kolkata');
$currentDateTime = new DateTime('now');
$currentDate = date("y-m-d h:i:s");

$sql = "UPDATE tbl_user_log  SET user_logout_datetime = '".$currentDate."', log_status = 'Inactive' WHERE user_log_id = ".$_SESSION['MEMBER_LOG_ID'];

mysqli_query($db,$sql);

// 2. Unset all the session variables
unset($_SESSION['MEMBER_ID']);
unset($_SESSION['MEMBER_FNAME']);
unset($_SESSION['MEMBER_EMAIL']);
unset($_SESSION['MEMBER_TYPE']);
unset($_SESSION['MEMBER_LOG_ID']);
unset($_SESSION['MEMBER_LOG_STATUS']);

alert_msg("Logged out Successfully","../index.php");
?>