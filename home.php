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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/7cbbb9f32a.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  
	<style type = "text/css">
	  
	  body, html {
  height: 100%;
}
@media screen and (device-aspect-ratio: 40/71) {
	 .centered{
	 position: absolute;
  top: 50% !important;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:86%;
  height:24%;
  
}

}

	@media only screen 
and (min-device-width : 411px) 
and (max-device-width : 823px) 
and (orientation : portrait) {

  .centered{
	 position: absolute;
  top: 39% !important;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:80%;
  height:30%;
  
}	

.page-banner_bg-image .centered .content{
	
	
	font-size:20px !important;
	
}
.centered1{
  width:95%;
  height:20% !important;
  padding:15px;
 margin : 0 auto;
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
  height: 160px; 
}  
	}
	
	   @media only screen and (max-width: 600px) {
  body{
	  overflow:scroll !important;
  }
  .sticky .fa-plus-circle{
	color:green;
	 position: fixed;
  bottom: 60px;
  right: 10px;
  font-size:3rem;
		   }
  	.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   top:0;
	   padding-bottom:60px ;
	   background-color:#ECF3E3 !important;
	   
	 }
  .page-banner_bg-image {
    position:absolute;
	   left:0;
	   right:0;
	   top:0;
      width: 100%;
      background-size: cover !important;
     min-height:100vh;
	 height:auto;
	   padding-bottom:60px ;
	   background-color:#ECF3E3 !important;
	
  }
  .centered{
	 position: absolute;
  top: 47%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:86%;
  height:24%;
  
}	

.page-banner_bg-image .centered .content{
	
	color:BLUE ;
	font-size:16px ;
	padding-top:80px ;
	position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.centered1{
  width:95%;
  height:20% !important;
  padding:15px;
 margin : 0 auto;
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
  height: 160px; 
}  
}
@media only screen and (min-width: 600px) {
	.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#ECF3E3 !important;
	   min-height:100vh;
	   height:auto;
  }
  article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 160px; 
}   
.centered1{
  width:95% !important;
  height:20% !important;
  padding:15px;
 margin : 0 auto;
}	
  	.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#ECF3E3 !important;
	   
	 }
	 .page-banner_bg-image .centered{
  position: absolute;
  top: 49%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white !important;
 
  height:25%;
}
    .sticky .fa-plus-circle{
	color:green;
	 position: fixed;
  bottom: 50px;
  right: 10px;
  font-size:3rem;
		   }
	.page-banner_bg-image .container  .centered1{
  width:50%;
  height:20% ;
  padding:5px;
 margin : 0 auto;
}	
 .centered{
	 position: absolute;
  top: 42% !important;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:70%;
  height:30%;
  
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
	
	color:BLUE !important;
	font-size:17px !important;
	padding-top:80px !important;
	position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
}
	
}
  
	  
	  @media only screen and (min-width: 768px) {
	    .page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px ;
	   background-color:#ECF3E3 !important;
	   
	 }
	 		.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px;
	   background-color:#ECF3E3 !important;
	min-height:100vh;
	height:auto;
	 }
  .page-banner_bg-image .centered .content{
	
	color:BLUE ;
	font-size:16px ;
	padding-top:80px ;
	position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.page-banner_bg-image .centered{
  position: absolute;
  top: 39%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:35% ;
  height:30%;
}
.centered1{
  width:32%;
  height:20% !important;
  padding:5px;
  float:left;
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
  height: 160px; 
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
	   padding-bottom:84px !important;
	   background-color:#ECF3E3 !important;
	 min-height:100vh;
	 height:auto;
  }
  
     .centered1{
  width:95% !important;
  height:20% !important;
  padding:15px !important;
 margin : 0 auto;
}	
  	.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:84px !important;
	   background-color:#ECF3E3 !important;
	   
	 }
  .sticky .fa-plus-circle{
	color:green;
	 position: fixed;
  bottom: 90px;
  right: 10px;
  font-size:4rem;
		   }
		   .centered1{
  width:95% !important;
  height:20% !important;
  padding:15px;
 margin : 0 auto;
}		
.btn-default{
	background-color:#ffffff !important;
	color:#46AD87;
	width:100%;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	font-size:30px !important;
}
	article {
  float: left;
  padding: 25px !important;
  width: 100%;
  background-color: #ffffff;
  height: 235px;
  font-size:20px;  
} 
    .page-banner_bg-image .centered .content{
	
	color:BLUE !important;
	font-size:37px !important;
	padding-top:80px !important;
	position: absolute;
  top: 29%;
  left: 45%;
  transform: translate(-50%, -50%);
}

.centered{
	 position: absolute;
  top: 29%;
  left: 30%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:75% !important;
  height:30%;
 
}
h3{
	font-size:40px !important;
}
div.form-group{
	font-size:35px;
}
h4{
	font-size:35px !important;
}
	}
	   
	@media only screen and (min-width: 992px) {

   .page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px ;
	   background-color:#ECF3E3 !important;
	   
	 }
	 		.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px ;
	   background-color:#ECF3E3 !important;
	 height:100vh;
	 }
  .page-banner_bg-image .centered .content{
	
	color:BLUE !important;
	font-size:16px ;
	padding-top:80px ;
	position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.centered{
  position: absolute;
  top: 39%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:35%;
  height:30%;
}
.centered1{
  width:32% !important;
  height:20% ;
  padding:5px;
  float:left;
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
  height: 160px; 
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
	   min-height:100vh;
	 height:auto;
  }	
  	.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:95px !important;
	   background-color:#ECF3E3 !important;
	   
	 }
    .sticky .fa-plus-circle{
	color:green;
	 position: fixed;
  bottom: 100px;
  right: 10px;
  font-size:5rem;
		   }
		   .centered1{
  width:95% !important;
  height:20% !important;
  padding:15px;
 margin : 0 auto;
}		
.btn-default{
	background-color:#ffffff !important;
	color:#46AD87;
	width:100%;
	border-color:#46AD87 !important;
	border-radius:4px !important;
	border-width:1px !important;
	font-size:30px !important;
}
	article {
  float: left;
  padding: 45px !important;
  width: 100%;
  background-color: #ffffff;
  height: 260px;
  font-size:20px;  
} 
div.form-group{
	font-size:35px;
}
h4{
	font-size:35px !important;
}
}

  

 @media only screen and (min-width: 1200px) {
	
    
	   .sticky .fa-plus-circle{
	color:green;
	 position: fixed;
  bottom: 50px;
  right: 10px;
  font-size:3rem;
		   }
		.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:43px !important;
	   background-color:#ECF3E3 !important;
	   
	 }
	 		.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:43px !important;
	   background-color:#ECF3E3 !important;
	 height:100vh;
	 }
  .page-banner_bg-image .centered .content{
	
	color:BLUE !important;
	font-size:16px !important;
	padding-top:80px !important;
	position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.centered{
  position: absolute;
  top: 39%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:25%;
  height:30%;
}
.centered1{
  width:32% !important;
  height:20% !important;
  padding:5px;
  float:left;
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
  height: 160px; 
}   }
	   


	


/* Style the header */
header {
  background-color: #46AD87;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
}

section:after {
  content: "";
  display: table;
  clear: both;
}
.btn-default:hover {
	background-color:#46AD87 !important;
	color:white;
	width:100%;
}
	</style>

    
  </head>
  <body>
   
   
   

 

   
    <?php                                  //No active plans so $row in table must be 0
	$counter = -1;                              //counting no of plans
	$email_id =  $_SESSION['email_id'];
	$result_array_query = " SELECT * FROM plan_details_page WHERE id = '$email_id' ";
	$result_array = mysqli_query($con,$result_array_query);
	$row=mysqli_num_rows($result_array);
	$class1= "page-banner_bg-image" ;
	$class2= "page-banner_bg-image2" ;
	?>
	<div class = '<?php if($row==0 || $row<7){
  echo "$class1";
}else{
	echo "$class2";
} ?>'>

<?php 
     include_once("header.php");
   ?>
   
	<?php
	if($row == 0){
	 ?>             
   <div class= container style="padding-top:60px;">
   <h3 style="font-weight:360;">You don't have any active plans</h3>
   </div>
   <div class="centered">
     <div class="content" >
	 
	     <a style="text-decoration:none;" href ="create-new-plan.php"><i style= "color:#46AD87;"class="fa fa-plus-circle"></i> Create a New Plan</a>
	 
	 </div>
   </div> 
     <?php } else {    // active plans
	?>
	<div class= container style="padding-top:50px;">
   <h3 style="font-weight:360;">Your Plans</h3>
   </div>
   <?php
	while($result_row = mysqli_fetch_row($result_array))
	{
		$counter = $counter + 1;
		?>
 
   <div class="container">
   <div class = "centered1" >
	<header>
  <h4> <?php $array = array('First', 'Second', 'Third','Fourth','Fifth','Sixth','Seventh','Eighth','Ninth','Tenth','Eleventh','Twelfth','Thirteenth','Fourteenth','Sixteenth','Seventeenth','Eighteenth','Nineteenth'
,'Twentieth');
  
  echo "$result_row[0]";

   ?> <i style = "float:right;"class="fa fa-user pr-1" aria-hidden="true"><?php echo " ".$result_row[4]; ?></i></h4>
</header>

<section>

  <article>
 
  <div class="form-group">
    <span><b>Budget</b><span style="float:right;">&#8377;<?php echo " ".$result_row[3]; ?></span></span>
    
    
  </div>
  <div class="form-group">
    <span><b>Date</b><span style="float:right;"><?php $date=date_create("$result_row[1]");
	                                      echo date_format($date,"jS M"); ?>  -
										  <?php $date1=date_create("$result_row[2]");
	                                      echo date_format($date1,"jS M Y"); ?></span></span>
   
  </div>
 <a href =" view-plan-page.php?get_link= <?php echo $counter; ?> "><button class="btn btn-default" type="submit">View Plan</button></a>
  </article>
</section>
</div>
</div>

	 <?php }?> <div class = "sticky">
 <a href =" create-new-plan.php "><i class="fa fa-plus-circle"></i></a>
 </div> <?php } ?>
   </div>
   
  
 
  <?php
     include_once("footer.php");
  ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

    
  </body>
</html>
