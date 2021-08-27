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

error_reporting(0);
$get_link = $_GET['get_link']-1;

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
 $url = "https://";   
else  
 $url = "http://";   
                                      
									   
    $url.= $_SERVER['HTTP_HOST'];     // Append the host(domain name, ip) to the URL.
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
       
    

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/7cbbb9f32a.js" crossorigin="anonymous"></script>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  
	<style type = "text/css">
	.btn-default:hover {
	background-color:#46AD87 !important;
	color:white;
	width:100%;
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

section:after {
  content: "";
  display: table;
  clear: both;
}

	@media only screen and (max-width: 600px) {

  	.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#ECF3E3 !important;
	 
	 }
  .page-banner_bg-image {
    position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#ECF3E3 !important;
	  
  }
  .centered{
	 position: absolute;
  top: 39%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:80%;
  height:30%;
  
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
.expense_distribution{
	width:88%;
	margin:0 auto;
	padding-bottom:14px;
}
.add_new_expense{
	width:87%;
	margin:0 auto;
	padding-bottom:20px;
}
.article1 {
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 490px; 
} 
.article3 {
	
	
	 padding: 10px;
  width: 100%;
  display:block !important;
  background-color: #ffffff;
  margin-bottom:10px;
 
	   }
	   .expense_info{
   
	width:90%;
	padding:7px;
 
  margin:0 auto;
  
}
	
}

@media only screen and (min-width: 600px) {

		.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#ECF3E3 !important;
	 
	 }
  .page-banner_bg-image {
    position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:60px !important;
	   background-color:#ECF3E3 !important;
	  
  }
  .centered{
	 position: absolute;
  top: 39%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:80%;
  height:30%;
  
}	
.centered1{
  width:92%;
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
.expense_distribution{
	width:87%;
	margin:0 auto;
	padding-bottom:14px;
}
.add_new_expense{
	width:87%;
	margin:0 auto;
	padding-bottom:20px;
}
.article1 {
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 490px; 
} 
.article3 {
	
	
	 padding: 10px;
  width: 100%;
  display:block !important;
  background-color: #ffffff;
  margin-bottom:10px;
 
	   }
	   .expense_info{
   
	width:90%;
	padding:7px;
 
  margin:0 auto;
  
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
  }
    .expense_distribution{
	width:85% !important;
	margin:0 auto;
	padding-bottom:14px;
}
  	.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:84px !important;
	   background-color:#ECF3E3 !important;
	 
	 }
	 .article3 {
	 
	
	 padding: 10px;
  width: 100%;
  display:block !important;
  background-color: #ffffff;
  margin-bottom:10px;
 
	   }
	   .expense_info{
  
	width:97%;
	padding:7px;
  
  margin:0 auto;
  
  
} .expense_info .article3 h6{
	  font-size:25px !important;
  } 
   .add_new_expense .article1 .label { font-size: 44px !important; }
  	  .add_new_expense .article1 .form-control { font-size: 24px !important; }
 
		   .centered1{
  width:100%;
  height:30% !important;
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
  height: 240px;
  font-size:20px;  
} 
  .expense_distribution{
	width:95% !important;
	margin:0 auto;
	margin-top:15px !important;
	margin-bottom:15px !important;
}
	.article1 {
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 730px; 
  font-size:30px;
} 

 .add_new_expense{
	width:95%;
	margin:0 auto;
	padding-bottom:14px;

}
 form{
	font-size:30px !important;

}

.centered{
	 position: absolute;
  top: 29%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color:white;
  width:65%;
  height:30%;
 
}
h3{
	font-size:40px !important;
}
div.form-group{
	font-size:30px !important;
}
h4{
	font-size:45px !important;
}

	}
	
@media only screen and (min-width: 1030px) {

		.page-banner_bg-image2 {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px !important;
	   background-color:#ECF3E3 !important;
	    min-height:119vh !important;
	  height:auto;
	 }
	 		.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:44px !important;
	   background-color:#ECF3E3 !important;
	   min-height:119vh !important;
	  height:auto;
	 }

.centered1{
  width:55%;
  height:350px !important;
  padding:5px;
  float:left;
  clear:right !important;
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
  height: 140px; 
}  
h4{
	font-size:20px !important;
} 
.add_new_expense{
	position:absolute;
	bottom:50px;
	right:86px;
	width:350px;
}
	.article1 {
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 480px; 
} 

.article3 {
	position:relative !important;
	 float:left !important;
	 padding: 10px;
  width: 100%;
  display:inline !important;
  background-color: #ffffff;
  margin-bottom:10px;
 
}

.wrapper{
		width:40% !important;
		float:left;
		margin-left:115px !important;
		background-color:#ECF3E3 !important;
	}

.expense_info{
    position:relative !important;
	float:left !important;
	width:50%;
	padding:5px;
  float:left;
  
  
}
.expense_info header {
	
	width:100%;
}
.expense_distribution{
	position:absolute;
	top:110px;
	right:190px;
	width:23%;
	
	
}
.centered2{
  width:32%;
  height:40% !important;
  padding:1px;
  float:left !important;
  clear:left !important; 
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
	     min-height:119vh !important;
	  height:auto;
	 }
	 		.page-banner_bg-image {
       position:absolute;
	   left:0;
	   right:0;
	   padding-bottom:43px !important;
	   background-color:#ECF3E3 !important;
	  min-height:119vh !important;
	  height:auto;
	 }

.centered1{
  width:55%;
  height:350px !important;
  padding:5px;
  float:left;
  clear:right !important;
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
  height: 140px; 
}  
h4{
	font-size:20px !important;
} 
.add_new_expense{
	position:absolute;
	bottom:50px;
	right:190px;
	width:350px;
}
	.article1 {
  padding: 20px;
  width: 100%;
  background-color: #ffffff;
  height: 480px; 
} 

.article3 {
	position:relative !important;
	 float:left !important;
	 padding: 10px;
  width: 100%;
  display:inline !important;
  background-color: #ffffff;
  margin-bottom:10px;
 
}

.wrapper{
		width:40% !important;
	
		float:left;
        margin-left:190px !important;
		background-color:#ECF3E3 !important;
	}

.expense_info{
    position:relative !important;
	float:left !important;
	width:50%;
	padding:5px;
  float:left;
  
  
}
.expense_info header {
	
	width:100%;
}
.expense_distribution{
	position:absolute;
	top:120px;
	right:190px;
	width:23% !important;
	
	
}
.centered2{
  width:32%;
  height:40% !important;
  padding:1px;
  float:left !important;
  clear:left !important; 
} }	
	  
	   	
	</style>

    
  </head>
  <body>
   
   
   
   
 

   
    <?php                                  //No active plans so $row in table must be 0
	$counter = -1;                              //counting no of plans
	$email_id =  $_SESSION['email_id'];
	$result_array_query = " SELECT * FROM plan_details_page WHERE id = '$email_id' ";
    $result_array = mysqli_query($con,$result_array_query);
	
	$class1= "page-banner_bg-image" ;
	$class2= "page-banner_bg-image2" ;
    $userinfo = array();

    while ($row_user = mysqli_fetch_assoc( $result_array))
    $userinfo[] = $row_user;
    $result_row = $userinfo[$get_link+1];
	$_SESSION['plan_info'] =  $result_row['title'];
	$trip_name =  $_SESSION['plan_info'];
	$result_array_qry = " SELECT * FROM add_new_expense WHERE id = '$trip_name' and email = '$email' ";
    $result_ary = mysqli_query($con,$result_array_qry);
	$no_rows_expense = mysqli_num_rows( $result_ary);

	?>
	
	
<div class = '<?php if($no_rows_expense<3){  // proper class assignment to display page
  echo "$class1";
}else{
	echo "$class2";
} ?>'>
	<?php 
     include_once("header.php");
   ?>
	<div class= container style="padding-top:50px;">
   <h3 style="font-weight:360;"></h3>
   </div>
  
 
   <div class="container">
   <div class = "centered1" >
	<header>
  <h4> <?php $array = array('First', 'Second', 'Third','Fourth','Fifth','Sixth','Seventh','Eighth','Ninth','Tenth','Eleventh','Twelfth','Thirteenth','Fourteenth','Sixteenth','Seventeenth','Eighteenth','Nineteenth'
,'Twentieth');
  $_SESSION['plan_count'] = $array[$get_link+1];
  echo $result_row['title'];

   ?>  <i style = "float:right;"class="fa fa-user pr-1" aria-hidden="true"><?php echo " ".$result_row['people']; ?></i></h4>
</header>

<section>

  <article>
 
  <div class="form-group">
    <span><b>Budget</b><span style="float:right;">&#8377;<?php echo " ".$result_row['budget']; ?></span></span>
    
    
  </div>
  <div class="form-group">
  <?php $total_expense = $result_row['total_expense']; $remaining_amount = $result_row['budget'] - $total_expense;	?>
    <span><b>Remaining Amount</b><span  style="float:right;font-weight:700 !important;color:<?php if($remaining_amount<0)
                                                                       echo "red";
        															else if($remaining_amount==0)echo "black"; 
                                                                  else if($remaining_amount>0)
	                                                              echo "green"; 	?>">&#8377;<?php 
    echo " ".$remaining_amount;	?></span></span>
   
  </div>
  <div class="form-group">
    <span><b>Date</b><span style="float:right;"><?php $date=date_create($result_row['start']);
	                                      echo date_format($date,"jS M"); ?>  -
										  <?php $date1=date_create($result_row['end']);
	                                      echo date_format($date1,"jS M Y"); ?></span></span>
   
  </div>

  </article>
</section>


</div>
</div>

<div class = '<?php if($no_rows_expense>0){  // proper class assignment to display page
  echo "wrapper";
} ?>  container'>

<?php
	  $expense_no = -1;
     while ($row_expense = mysqli_fetch_row($result_ary)){
     $expense_no = $expense_no +1;
?>
<div class = " expense_info">
<header class = "expense-header">
  <h4><?php $array = array('First', 'Second', 'Third','Fourth','Fifth','Sixth','Seventh','Eighth','Ninth','Tenth','Eleventh','Twelfth','Thirteenth','Fourteenth','Sixteenth','Seventeenth','Eighteenth','Nineteenth'
,'Twentieth');
  
  echo $row_expense[0];

   ?> </h4>
</header>
 <div class = "article3" >
 
  <div class="form-group">
    <span><b>Amount</b><span style="float:right;">&#8377;<?php echo " ".$row_expense[2]; ?></span></span>
    
    
  </div>
  <div class="form-group">
    <span><b>Paid by</b><span style="float:right;"><?php echo $row_expense[3]; ?></span></span>
   
  </div>
  
  <div class="form-group">
    <span><b>Paid on</b><span style="float:right;"><?php $date=date_create($row_expense[1]);
	                                      echo date_format($date,"jS M Y"); ?> </span></span>
   
  </div>
   
  <center style="color:blue;"><a style="text-decoration:none;" href = <?php echo $row_expense[4];?>><h6><?php 
  if(!$row_expense[4]) echo "You Don't have bill";
    else echo "Show Bill";  ?></h6></a></center>
 </div>
 </div>
	 <?php } ?>
	 
</div>
  <div class = "container">
  <div class = "expense_distribution "><a href="expense-distribution.php" class="btn btn-default" type="submit">Expense Distribution</a></div></div>
<div class = "container">
<div class = "add_new_expense">

<header>
  <h4>Add New Expense</h4>
</header>

<section>
<div class = "article1">
<form enctype="multipart/form-data" method = "post" action="view-plan-page_script.php">
  
 
  <div class="form-group">
    <label  class="label" for="title_expense">Title</label>
    <input name="title_expense" type="text" class="form-control" id="title_expense" aria-describedby="titleExpense" placeholder="Expense Name" required>
  </div>
  <div class="form-group">
    <label class="label" for="date_expenditure">Date</label>
    <input name="expense_date"  min = <?php $startDate =  mysqli_real_escape_string($con,$result_row['start']); echo $startDate; ?> max = <?php $endDate =  mysqli_real_escape_string($con,$result_row['end']);  echo $endDate; ?> type="date" class="form-control" id="date_expenditure" aria-describedby="expenseDate" placeholder="" required>
  </div>
  <div class="form-group">
    <label class="label" for="amountSpent">Amount Spent</label>
    <input min="1"  name="amount" type="number" class="form-control" id="amountSpent" placeholder="Amount Spent" required>
  </div>
  <div class=" form-group">
    <select  id="amountSpent" name="person_name"  class="form-control" aria-describedby="person_Name"  required>
	<option value="" disabled selected>Choose</option>
	<option><?php echo $result_row['person1']; ?></option>
	<option><?php echo $result_row['person2']; ?></option>
	</select>
  </div>
  <div class="form-group">
    <label class="label" for="upload_bill">Upload Bill</label>
    <input type="file" name = "uploadedimage" class="form-control form-control-file " id="upload_bill">
  </div>
 <button class="btn btn-default" type="submit">Add</button>
 </form>
  </div>

  
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
