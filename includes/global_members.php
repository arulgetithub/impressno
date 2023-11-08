<?php
function alert_msg($msg,$loc)
{
	if($loc != '')
	{
		echo "<script type='text/javascript'>alert('".$msg."');
			window.location='".$loc."';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('".$msg."');</script>";
	}
}

?>