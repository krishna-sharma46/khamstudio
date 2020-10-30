<?php
//variable setting
$YOUR NAME = $_REQUEST['YOUR NAME'];
$NAME OF APP = $_REQUEST['NAME OF APP'];
$YOUR EMAIL = $_REQUEST['YOUR EMAIL'];

//check input fields
if (empty($YOUR NAME) || empty($NAME OF APP) )
{
	echo "name and the name of app is neccesary";
}	
else
{
	mail("krishnamanya23@gmail.com","KHAMsite",$NAME OF APP, "From:$YOUR NAME"); 
	echo"<script type='text/javascript'>alert('thanks for your 
	HELP');
	window.history.log(-1);
	</script>";
}	
?>
