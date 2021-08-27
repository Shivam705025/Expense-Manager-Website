<?php
session_start();
include_once("common.php");
 $_SESSION["email_id"]  = $email  ;
 $_SESSION["pass_word"] = $password ;
if($email==true && $password==true)
{

}
else
{
header('location:login.php?login_error="Please Login and continue"');
}
?><?php



  

if(isset($_POST['Submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
$email = mysqli_real_escape_string($con, $email);    //precaution from escape characters like "'"
$password = md5(md5(mysqli_real_escape_string($con, $password)));

	$data = mysqli_query($con,"SELECT * from sign_up WHERE email = '$email' && password = '$password'");
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION["email_id"] = $email;
		$_SESSION["pass_word"] = $password;
		header("location:home.php");
	}
   else 
     {
     		header("location:login.php?msgg=Invalid Email or Password!Please Login Again.");
     }
}


?>