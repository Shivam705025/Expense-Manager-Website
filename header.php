

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/7cbbb9f32a.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
	 
	 
	

.sticky + .content {
  padding-top: 60px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
	#navbar{
		position:sticky !important;
		top: !important ;
		right:0 !important;
		left:0 !important;
	}
	 
	 @media only screen and (max-width: 600px) {
	
    .navbar .container .navbar-brand {
    
    font-size: 18px;
   
}
      .navbar .container .nav-link {
    
    font-size: 15px;
   
}
     .navbar-fixed-top {
      position:fixed;
	  top:0;
	  left:0;
	  width:100%;
	  
    }
     .navbar-fixed-top .container .navbar-collapse {
        max-height: none;
    }
    body {
        margin: 0;
    }
}
	 }
	 @media only screen and (min-width: 600px) {
	
    .navbar .container .navbar-brand {
    
    font-size: 20px;
   
}
	 }

    	 @media only screen and (min-width: 600px) {
	
    .navbar .container .nav-link {
    
    font-size: 16px;
   
}
    
}
       @media only screen and (min-width: 1200px) {
		   
		     .navbar .container .navbar-brand {
    
    font-size: 20px !important;
	
   
}
	   }
	   
	        @media only screen and (min-width: 1200px) {
		   
		     .navbar  {
    
     height:40px;
	 position:fixed;
	 top:0;
   
}
	   }
	   
	   @media only screen and (min-width: 1200px) {
		   
		     .navbar .container .nav-link {
    
    font-size: 14px !important;
	 
   
}
	   }
	   
@media only screen and (min-width: 992px) {
	      .navbar .container .nav-link {
    
    font-size: 16px;
   
}
	   }
@media only screen and (min-width: 992px) {
	      .navbar .container .navbar-brand {
    
    font-size: 20px;
    
}
	   }
	   
@media only screen and (min-width: 992px) {
	      .navbar  {
    
   height:40px;
    
}
	   }

	  
@media only screen and (min-width: 768px) {
	      .navbar .container .navbar-brand {
    
    font-size: 20px;
   
}
	
}

	   
@media only screen and (min-width: 768px) {
	        .navbar .container .nav-link {
    
    font-size: 16px;
   
}
	
}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
     .navbar .container .navbar-brand {
    
    font-size: 35px;
   
}	}
@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
     .navbar .container .nav-link {
    
    font-size: 25px;
   
}	}
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1.5) {
	       .navbar .container .navbar-brand {
    
    font-size: 50px;
   
}	
}
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1.5) {
	      .navbar  {
    
   height:80px;
    
}
}
@media only screen 
  and (min-width: 1024px) 
  and (max-height: 1366px) 
  and (orientation: portrait) 
  and (-webkit-min-device-pixel-ratio: 1.5) {
       .navbar .container .nav-link{
    
    font-size: 30px;
	padding-top:15px;
   
}	
}
	

	</style>
  </head>
  
  <body>



<nav id = "navbar" class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" style = "color:#B2AEAE;" href="home.php" >Expense Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
       <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0 ">
       <li class="nav-item px-2">
       <a class="nav-link" href="about-us.php"><i class="fa fa-info-circle pr-1" aria-hidden="true"></i></i>About Us</a>
       </li>
       <li class="nav-item px-2">
	   <?php
	   if(!isset($_SESSION['email_id'])){
		   ?>
	   
        <a class="nav-link" href="sign-up.php"><i class="fa fa-user pr-1" aria-hidden="true"></i>Sign Up</a>
		
	   <?php }else { ?>
         <a class="nav-link" href="change-password.php"><i class="fa fa-cog pr-1" aria-hidden="true"></i>Change Password</a>
	   <?php } ?>
       </li>
       <li class="nav-item px-2">
	   	   <?php
	   if(!isset($_SESSION['email_id'])){
		   ?>
        <a class="nav-link" href="login.php"><i class="fa fa-sign-in pr-1" aria-hidden="true"></i>Login</a>
		
		<?php }else { ?>
		 <a class="nav-link" href="logout.php"><i class="fa fa-sign-out pr-1" aria-hidden="true"></i>Logout</a>
	   <?php } ?>
       </li>
       </ul>
      </div>
     </div>
   </nav>
   
           <script type="text/javascript">
    
	        window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
	
           </script>
   
   </body>
</html>