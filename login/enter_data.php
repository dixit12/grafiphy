<?php

session_start();
include "db.php";
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

if($pass1 != $pass2)
{
	header("Location:http://localhost/wrongpass.php ");

}
else
{
	$sql="INSERT into user(name,password) VALUES ('$email','$pass1')";
	if (mysqli_query($con, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	$_SESSION["name"]=$email;


	header("Location:http://localhost/044/scanup/index.html ");
}

?>
