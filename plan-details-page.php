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
?>
<?php

error_reporting(0);
$budget = $_POST['budget'];
$people = $_POST['no_people'];


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
	  
	  
	 
	   
	   @media (max-width: 600px) {

  .page-banner_bg-image {
    position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px;
	     background-color:#FAFAFA;
	   width:100%;
	   background-size:cover;
  }
  
  	 .page-banner_bg-image .centered .content {
   padding-top:25px !important;
   padding-bottom:70px;
   
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:15px;
}
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
width: 130% !important;

}

  	.page-banner_bg-image .centered .content .border .text-center{
	
}
article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 670px !important; 
}
}
@media only screen and (min-width: 600px) {
	.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#FAFAFA;
	   width:100%;
	   
	   background-size:cover;
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
	   background-color:#FAFAFA;
	   width:100%;
	   
	   background-size:cover;
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
	   background-color:#FAFAFA;
	   width:100%;
	   
	   background-size:cover;
  }
     .page-banner_bg-image .centered .msg {
  font-size:20px !important;
  
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
             overflow: scroll !important; 
			 text-align: center;
       }
	
      article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 680px !important; 
}
  
}


@media only screen and (min-width: 1200px) {
	.page-banner_bg-image .centered .content .border{
	width:40%;	
	border-radius:10px;
	height:100%;
	background-color:#FAFAFA;
	   
	   
	   background-size:cover;
}
    	.page-banner_bg-image .centered .content {
	padding-top:30px;	
}
   body {
             overflow: hidden !important; 
			 text-align: center;
       }
	   article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 590px !important; 
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
	   height:100vh;
	   background-color:#FAFAFA;
	   width:100%;
	   background-size:cover;
  }
     .page-banner_bg-image .centered .msg {
  font-size:35px !important;
  
}
    	 .page-banner_bg-image .centered .content {
   padding-top:73px;
   padding-bottom:7px;
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:30px;
}
 	.page-banner_bg-image .centered .content .border .form-control {
	height:45px;
}
  
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
	width:100% !important;
	height:100vh !important;
	
}

    .btn-default{
		font-size:35px !important;
	}
	 body{
		 overflow:scroll !important;
	 }
	 input[placeholder] {
    font-size: 32px;
}
.btn-default{
	font-size:30px !important;
}
.form-group label {
	font-size:32px !important;
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
	   background-color:#FAFAFA;
	   width:100%;
	   
	   background-size:cover;
  }	
  
       	 .page-banner_bg-image .centered .content {
   padding-top:73px;
   padding-bottom:7px;
 
}
    	.page-banner_bg-image .centered .content .border .form-group {
	font-size:35px;
}
   	.page-banner_bg-image .centered .content .border .form-control {
	height:50px !important;
}
   .page-banner_bg-image .centered .content .border  {
	border-radius:10px;
width:80% !important;
 height:100%;
}
 

    .btn-default{
background-color:#46AD87;
WIDTH:100%;
font-size:66px !important;
}

body{
	overflow:hidden !important;
}

}


.btn-default{
	background-color:#46ad87;
	width:100%;
	color:white;
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


.btn-default:hover {
	background-color:#46AD87 !important;
	color:white;
	width:100%;
}
.btn-default{
	background-color:#ffffff !important;
	color:#46AD87;
	width:100%;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
}



article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 590px; 
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
      <center>
   <div  class = "msg" style="color:red;">
	<?php error_reporting(0);
		echo $_GET['error'];
        
		?></div></center>
     <div class="container content justify-content-center align-items-center" >
	 <form method="post" action="plan_details_script.php" class="border" style="width:56%; background-color:#ffffff !important;">


<section>

  <article>
 
  <div class="form-group">
    <label style = "font-weight:500;"for="gettitle">Title</label>
    <input name="title" type="text" class="form-control vw-100"  id="gettitle" aria-describedby="giveTitle" placeholder="Enter Title (Ex. Trip to Goa)" required>
  </div>
  
  <div class="form-group">
    <label style = "font-weight:500;" for="from">From</label><?php $myDate = date('Y-m-d');
    	?>
    <input name="from" type="date" min = "<?php echo $myDate;?>"  class="form-control" id="from" aria-describedby="startDate" placeholder="dd/mm/yyyy" required>
    </div>
	<div class="form-group">
    <label style = "font-weight:500;" for="to">To</label>  
    <input style = "font-weight:500;" name="to" type="date" min = "<?php echo myDate; ?>" class="form-control" id="to" aria-describedby="endDate" placeholder="dd/mm/yyyy" required>
  </div>
  <div class = "row flex-container">
  <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-8  ">
    <label style = "font-weight:500;" for="initialBudget">Initial Budget</label>
    <input name="budget" type="number" style=" background-color: #CFD2D2; " value="<?php echo $budget; ?>" min="1000" class="form-control" id="initialBudget" aria-describedby="initialBudget"  readonly>
  </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 ">
    <label style = "font-weight:500;" for="people">No. of people</label>
    <input name="people" type="number"style=" background-color: #CFD2D2; " min="1" value="<?php echo $people; ?>" class="form-control" id="people" aria-describedby="noOfPeople" placeholder="2" readonly>
  </div>
  </div>
  
  <div class="form-group">
    <label style = "font-weight:500;" for="person1">Person 1</label>
    <input name ="person1" type="text" class="form-control" id="person1" aria-describedby="personOneName" placeholder="Person 1 Name" required>
  </div>
  <div class="form-group">
    <label style = "font-weight:500;" for="person2">Person 2</label>
    <input name="person2" type="text" class="form-control" id="person2" aria-describedby="personTwoName" placeholder="Person 2 Name">
  </div>
 
  <button class="btn btn-default" type="submit">Submit</button>
  </article>
</section>
     </form> 
 
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