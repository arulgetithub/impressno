<?php
 include('../includes/connection.php');
 include('../includes/global_members.php');
 
 if(isset($_POST['send']))
 {
	 $contact_name = trim($_POST['contact_name']);
	 $contact_email = trim($_POST['contact_email']);
	 $contact_subject = trim($_POST['contact_subject']);
	 $contact_message = trim($_POST['contact_message']);
	 
	 if($contact_name == '')
	 {
		 alert_msg("Contact Name Cannot Be Blank","../index.php");
	 }
	 else if($contact_email == '')
	 {
		 alert_msg("Contact Email Cannot Be Blank","../index.php");
	 }
	 else if($contact_subject == '')
	 {
		 alert_msg("Contact Subject Cannot Be Blank","../index.php");
	 }
	 else if($contact_message == '')
	 {
		 alert_msg("Contact Message Cannot Be Blank","../index.php");
	 }
	 else if(len($contact_message))
	 {
		 alert_msg("Message should be minimum of 50 Characters and maximum 200 characters","../index.php");
	 }
	 else
	 {
	 }
 }
 else
 {
?>
	<script type="text/javascript">window.location = "../index.php";</script>
<?php
 }
?>
