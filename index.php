<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/7cbbb9f32a.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style type = "text/css">
	  
	   body {
             overflow: hidden; 
			
       }
	 
	   .page-banner_bg-image{
	      
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:40px;

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
	
}
 @media only screen and (min-width: 1200px) and (max-width: 1200px) {
		   
		.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:43px !important;
  }
	   }
	   

@media only screen and (min-width: 992px) {
	.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px;
  }
	   }
	

@media only screen and (min-width: 768px) {
	  .page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px;
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


.centered{
	 position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:black;
  width:92%;
  height:30%;
  background:rgba(13,15,15,0.38);
}	

.page-banner_bg-image .centered .content{
	
	color:white;
	font-size:46px;
	 position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
  
	
}
@media only screen and (max-width: 600px) {
	.page-banner_bg-image .centered .content{
	
	color:white;
	font-size:17px;
	text-align:center;	
	padding-top:60px;
}
}
@media only screen and (min-width: 600px) {
	.page-banner_bg-image .centered .content{
	
	color:white;
	font-size:32px;
	text-align:center;
	padding-top:45px;
	
}
}
@media only screen and (min-width: 768px) {
	.page-banner_bg-image .centered .content{
	
	color:white;
	font-size:24px;
	text-align:center;	
}
}
.btn-default {
    background-color: #06BE8C !important;
	
}
@media only screen and (min-width: 1200px) {
	.page-banner_bg-image .centered .content{
	
	color:white;
	font-size:32px;
	padding-top:60px;
}
}
@media only screen and (min-width: 992px) {
	.page-banner_bg-image .centered .content{
	
	color:white;
	font-size:32px;
		

}
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
    .page-banner_bg-image .centered .content{
	padding-top:90px;
	color:white;
	font-size:35px;
	
		

}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
	
	.btn-default {
    background-color: #06BE8C !important;
	font-size:27px !important;
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
}
	</style>

    
  </head>
  <body>
   
   
   
   
 

   <div class = "page-banner_bg-image">
   <?php 
     include_once("header.php");
   ?>
   <div class="centered">
     <div class="content" >
	 
	  <p>We help you control your budget</p>
	  <a href = "sign-up.php"><button type="button" class="btn btn-default">Start Today</button></a>
	 
	 </div>
   </div>
   <img style="width:100%;height:100vh;background-size:cover;" src="rupee1.jpg"> 
   </div>
  
 
  <?php
     include_once("footer.php");
  ?>
    
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

    
  </body>
</html>