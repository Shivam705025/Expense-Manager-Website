<?php
session_start();
include_once("common.php");
$email = $_SESSION["email_id"] ;
$password = $_SESSION["pass_word"];
if($email==true && $password==true)
{

}
else
{
header('location:login.php?login_error="Please Login and continue"');
}
$oldPassword = mysqli_real_escape_string($con,$_POST['o_Password']);
$newPassword = mysqli_real_escape_string($con,$_POST['n_Password']);
$confirmPassword = mysqli_real_escape_string($con,$_POST['confirmPassword']);
$passWord = md5(md5($oldPassword));
if(strcmp($passWord,$password)!==0){
	 header("location: change-password.php?password_error= Your old password is not matching as per our record.!!");
	 exit;
}
else if( strlen($newPassword) < 6) {
 header('location: change-password.php?password_error= Password should be minimum 6 characters long');
 
}

else if(strcmp($newPassword,$confirmPassword) !== 0){
	header('location: change-password.php?password_error= New password and confirm new password must be same!');
 
}
else  {
	$passWord1 = md5(md5($newPassword));
$result = mysqli_query($con,"UPDATE sign_up SET password = '$passWord1' WHERE email = '$email'");
header("location:login.php?change_password=Password Changed Sucessfully! Please login..");
}




?>
