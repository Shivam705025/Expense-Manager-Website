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
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/7cbbb9f32a.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style type = "text/css">
	  
	  
	 
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
	 
@media only screen and (min-width: 600px) {
	.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
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
	      article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 250px !important;  
}
	   }
	

@media only screen and (min-width: 768px) {
	  .page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px;
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
	      article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 270px !important;  
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
	   article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 250px !important;  
}
}

@media only screen and (max-width: 600px) {
	.page-banner_bg-image {
    position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px;
  }
	 .page-banner_bg-image .centered .content {
   padding-top:25px !important;
   padding-bottom:10px;
   
}
.btn-default:hover .btn-default:focus, .btn-default:active{
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

input[placeholder] {
    font-size: 18px;
}
.btn-default{
	font-size:18px !important;
}
.form-group label {
	font-size:18px !important;
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
}


@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
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
    .btn-success{
		font-size:35px !important;
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
  height: 415px !important;  
}
input[placeholder] {
    font-size: 32px;
}
.btn-default{
	font-size:29px !important;
}
.form-group label {
	font-size:32px !important;
}
header h4{
	font-size:36px !important;
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
.btn-default:hover{
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
  height: 290px; 
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
  <h4>Create New Plan</h4>
</header>

<section>

  <article>
 
  <div class="form-group">
    <label for="initialBudget">Initial Budget</label>
    <input name="budget" type="number" class="form-control" min="50" id="initialBudget" aria-describedby="initialBudgetHelp" placeholder="Initial Budget (Ex. 4000)" required>
    
  </div>
  <div class="form-group">
    <label for="noOfPeople">How many people you want to add in your group?</label>
    <input min="1"  name="no_people" type="number" class="form-control" id="noOfPeople" placeholder="No. of people" required>
  </div>
 <button class="btn btn-default" type="submit">Next</button>
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