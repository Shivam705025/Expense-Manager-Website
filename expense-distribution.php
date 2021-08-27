<?php
session_start();
include_once("common.php");
$email = $_SESSION["email_id"] ;
$password = $_SESSION["pass_word"];
$plan_info = $_SESSION["plan_info"] ;
if($email==true && $password==true)
{

}
else
{
header('location:login.php?login_error="Please Login and continue"');
}


$plan_count = $_SESSION['plan_count'];
$result_array_qry = " SELECT * FROM  plan_details_page WHERE title = '$plan_info' ";
$result = mysqli_query($con,$result_array_qry);
while($row = mysqli_fetch_row($result))
{
	$budget = $row[3];
	$total_amount_spent = $row[8];
	$remaining_amount = $budget-$total_amount_spent;
	$no_of_people = $row[4];
	$individual_shares = $total_amount_spent/$no_of_people;
	$personA = $row[5];
	$personB = $row[6];
}
$result_array_query = " SELECT * FROM  add_new_expense WHERE id = '$plan_info' AND person = '$personA'  ";
$result_array = mysqli_query($con,$result_array_query);
$money_spent_personA = 0;
while($row_result = mysqli_fetch_array($result_array))
{
	$money_spent_personA = $money_spent_personA + $row_result[2];
}
$result_array_query1 = " SELECT * FROM  add_new_expense WHERE id = '$plan_info' AND person = '$personB'  ";
$result_array1 = mysqli_query($con,$result_array_query1);
$money_spent_personB = 0;
while($row_result1 = mysqli_fetch_array($result_array1))
{
	$money_spent_personB = $money_spent_personB + $row_result1[2];
}
$personA_due = $money_spent_personA - $individual_shares;
$personB_due = $money_spent_personB - $individual_shares;
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/7cbbb9f32a.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	
	<style type = "text/css">
	  
	  .btn-default:hover {
	background-color:#46AD87 !important;
	color:white !important;
	width:100%;
}
	 
	   .page-banner_bg-image{
	      
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:40px;
	   background-color:#FAFAFA;
	   width:100%;
	   height:100vh;
	   background-size:cover;

	   }
	   
	   @media (max-width: 600px) {

  .page-banner_bg-image {
    position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px;
  }
}
@media only screen and (min-width: 600px) {
	.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
  }
  .btn-default{
	background-color:#ffffff !important;
	color:#46AD87 !important;
	width:50% !important;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	margin:0 auto !important;
}
   	.page-banner_bg-image .centered .content .border{
	width:60%;	
	border-radius:10px;
	height:100%;
}
    	.page-banner_bg-image .centered .content {
	padding-top:30px;	
}
   body {
             overflow: hidden; 
			 text-align: center;
       }
	
}

	   

@media only screen and (min-width: 992px) {
	.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px;
  }
  .btn-default{
	background-color:#ffffff !important;
	color:#46AD87 !important;
	width:40% !important;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	margin:0 auto !important;
}
    	.page-banner_bg-image .centered .content .border{
	width:40%;	
	border-radius:10px;
	height:100%;
}
    	.page-banner_bg-image .centered .content {
	padding-top:30px;	
}
   body {
             overflow: hidden; 
			 text-align: center;
       }
	   }
	

@media only screen and (min-width: 768px) {
	  .page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px;
  }
  .btn-default{
	background-color:#ffffff !important;
	color:#46AD87 !important;
	width:50% !important;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	margin:0 auto !important;
}
   	.page-banner_bg-image .centered .content .border{
	width:60%;	
	border-radius:10px;
	height:100%;
}
    	.page-banner_bg-image .centered .content {
	padding-top:30px;	
}
   body {
             overflow: hidden; 
			 text-align: center;
       }
  
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
    .page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:84px;
  }
	}

@media only screen and (min-width: 1200px) {
	.page-banner_bg-image .centered .content .border{
	width:40%;	
	border-radius:10px;
	height:100%;
}
    	.page-banner_bg-image .centered .content {
	padding-top:30px;	
}
   body {
             overflow: hidden; 
			 text-align: center;
       }
	   .btn-default{
	background-color:#ffffff !important;
	color:#46AD87 !important;
	width:30% !important;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	margin:0 auto !important;
}
}

@media only screen and (max-width: 600px) {
	 .page-banner_bg-image .centered .content {
   padding-top:25px !important;
   padding-bottom:7px;
   
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:15px;
}
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
width: 130% !important;}
  	.page-banner_bg-image .centered .content .border .text-center{
	font-size:20px;
}
    nav, article {
    width: 100%;
    height: auto;
  }
  .btn-default{
	background-color:#ffffff !important;
	color:#46AD87 !important;
	width:30% !important;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	margin:0 auto !important;
}
}


@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
    	 .page-banner_bg-image .centered .content {
   padding-top:73px;
   padding-bottom:7px;
}
 .page-banner_bg-image .centered .content h4{
   font-size:42px !important;
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:35px;
}
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
	width:100% !important;
}
  	.page-banner_bg-image .centered .content .border .text-center{
	font-size:40px;
}
    .btn-default{
		font-size:28px !important;
	}
	  nav, article {
    width: 100%;
    height: auto;
  }
  article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 630px !important; 
}
.btn-default{
	background-color:#ffffff !important;
	color:#46AD87 !important;
	width:30% !important;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	margin:0 auto !important;
}
}

		

}
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1.5) {
   .page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:95px;
  }	
       	 .page-banner_bg-image .centered .content {
   padding-top:73px;
   padding-bottom:7px;
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:35px;
}
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
width:100% !important;
}
  	.page-banner_bg-image .centered .content .border .text-center{
	font-size:40px;
}
    .btn-default{
background-color:#46AD87;
WIDTH:100%;
font-size:66px !important;
}


      nav, article {
    width: 100%;
    height: 80%;
  }

}


@media screen and (device-aspect-ratio: 40/71) {
	       	 .page-banner_bg-image .centered .content {
   
   padding-top:0px;
   padding-bottom:2px;
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:10px;
}
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
	width:80%;
}
  	.page-banner_bg-image .centered .content .border .text-center{
	font-size:14px;
}
 

}
.btn-default{
	background-color:#46AD87;
	color:white;
	width:100%;
}
 .page-banner_bg-image .centered .content{
	   display: flex;
    align-items: center;
    
}
#title{
	height:20px !important;
	border-bottom:1px solid black; 
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #46AD87;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
}





article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 385px; 
}

section:after {
  content: "";
  display: table;
  clear: both;
}


footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}



	</style>

    
  </head>
  <body>
   
  
   
 

   <div class = "page-banner_bg-image">
    
   <?php 
     include_once("header.php");
   ?>
   <div class="centered">
     <div class="container content justify-content-center align-items-center" >
	 <form method="post" action="plan-details-page.php" class="border" style="width:56%;">
<header>
  <h4> <?php echo $plan_info; ?> <i style = "float:right;"class="fa fa-user pr-1" aria-hidden="true"><?php echo " ".$no_of_people; ?></i></h4>
</header>

<section>

  <article>
 
  
  <div class="form-group">
    <span><b>Initial Budget</b><b><span style="float:right;">&#8377;<?php echo " ".$budget; ?></span></b></span>
  </div>
  <div class="form-group">
    
    <span><b><?php echo $personA ;?></b><span style="float:right;">&#8377;<?php echo " ".$money_spent_personA; ?></span></span>
    
  </div>
  <div class="form-group">
    
    <span><b><?php echo $personB ;?></b><span style="float:right;">&#8377;<?php echo " ".$money_spent_personB;?></span></span>
    
  </div>
   <div class="form-group">
    
    <span><b>Total amount spent</b><b><span style="float:right;">&#8377;<?php echo " ".$total_amount_spent;?></span></b></span>
    
  </div>
   <div class="form-group">
    
    <span><b>Remaining Amount</b><span style="float:right;font-weight:700;color:<?php if($remaining_amount<0)
                                                                       echo "red";
        															else if($remaining_amount==0)echo "black"; 
                                                                  else if($remaining_amount>0)
	                                                              echo "green"; 	?>">&#8377;<?php echo " ".$remaining_amount;?></span></span>
    
  </div>
   <div class="form-group">
    
    <span><b>Individual Shares</b><span style="float:right;">&#8377;<?php echo " ".$individual_shares;?></span></span>
    
  </div>
   <div class="form-group">
    
    <span><b><?php echo $personA ;?></b><span style="float:right;font-weight:600;color:<?php if($personA_due<0)
                                                                       echo "red";
        															else if($remaining_amount==0)echo "black"; 
                                                                  else if($remaining_amount>0)
	                                                              echo "green"; 	?>"><?php
															  if($personA_due<0) echo "Owes ";
															  else if($personA_due>0) echo "Gets back "; 
															  else if($personA_due==0) echo "All Settled up";?>&#8377;<?php echo " ".$personA_due;?></span></span>
    
  </div>
    <div class="form-group">
  <span><b><?php echo $personB ;?></b><span style="float:right;font-weight:600;color:<?php if($personB_due<0)
                                                                       echo "red";
        															else if($remaining_amount==0)echo "black"; 
                                                                  else if($remaining_amount>0)
	                                                              echo "green"; 	?>"><?php
															  if($personB_due<0) echo "Owes ";
															  else if($personB_due>0) echo "Gets back "; 
															  else if($personB_due==0) echo "All Settled up";?>&#8377;<?php echo " ".$personB_due;?></span></span>
    
  </div>

 <?php $link =  $_SERVER['HTTP_REFERER'];
 ?>
 <center><a href = "<?php echo $link; ?>" class="btn btn-default" type="submit"><i class="fa fa-arrow-left pr-1" aria-hidden="true"></i>Go back</a></center>
  </article>
</section>
      
 
	 </div>
	 </div>
	    
   </div>
 
   
  
 
  <?php
     include_once("footer.php");
  ?>
    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

    
  </body>
</html>
  <?php
$link =  $_SERVER['HTTP_REFERER'];    //storing previous page link in $link
header( "refresh:10;url = $link" ); 

?>