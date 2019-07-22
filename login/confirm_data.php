<?php

session_start();
include "db.php";
$email=$_POST['email'];
$pass1=$_POST['pass'];



	$sql="SELECT password FROM user where name='$email'";

	$esh = mysql_query($sql,$con);

	if($esh==$pass)
	{
		 header("Location:http://localhost/044/scanup/index.html ");
	}
	else
	{
		header("Location:http://localhost/wrongpass.php ");
	}
	



?>
