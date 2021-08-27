<?php
session_start();
include_once("common.php");
$title = mysqli_real_escape_string($con,$_POST['title']);
$from = mysqli_real_escape_string($con,$_POST['from']);    //precaution from escape characters like "'"
$to = mysqli_real_escape_string($con,$_POST['to']);
$next_date = date('Y-m-d', strtotime($from .' +1 day'));	
$budget = mysqli_real_escape_string($con,$_POST['budget']);
$people = mysqli_real_escape_string($con,$_POST['people']);
$person1 = mysqli_real_escape_string($con,$_POST['person1']);
$person2 = mysqli_real_escape_string($con,$_POST['person2']);
$id = $_SESSION["email_id"];
$select_qry="INSERT INTO plan_details_page (title,start,end,budget,people,person1,person2,id) values('$title','$from','$to','$budget','$people','$person1','$person2','$id')";
$result = mysqli_query($con,$select_qry);
header('location:home.php');

?>
