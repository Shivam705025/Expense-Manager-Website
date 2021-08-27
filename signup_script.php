<?php

include_once("common.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
 if(!preg_match($regex_email, $email) && strlen($password) < 6 )  //back-end validation
{
	header('location: sign-up.php?password_error= Password should be minimum 6 characters long&email_error=Enter valid email address');
	exit;
}
else if (!preg_match($regex_email, $email)) {
   header('location: sign-up.php?email_error=Enter valid email address');
   exit;
}
else if(strlen($password) < 6) {
 header('location: sign-up.php?password_error= Password should be minimum 6 characters long');
 exit;
}

function isMemberExists($con,$name,$password,$number, $email)
{
    
	$data = mysqli_query($con,"select * FROM sign_up WHERE email = '$email' OR number = '$number'");
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		header("location: login.php?msg=User Already Registered ! Please Login.");
	}
	else
	{
$email = mysqli_real_escape_string($con, $email);    //precaution from escape characters like "'"
$name = mysqli_real_escape_string($con, $name);
$password = md5(md5(mysqli_real_escape_string($con, $password))); //encoding password using md5
$number = mysqli_real_escape_string($con, $number);

$select_qry="INSERT INTO sign_up  values('$name','$email','$password',$number)";
$result = mysqli_query($con,$select_qry);
header("location:login.php?msggg=Registration Successful ! Please Login.");
	}
}
isMemberExists($con,$name,$password,$number, $email);

?>
