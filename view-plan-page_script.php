 <?php
session_start();

$email = $_SESSION["email_id"] ;
$password = $_SESSION["pass_word"];
if($email==true && $password==true)
{

}
else
{
header('location:login.php?login_error="Please Login and continue"');
}
?> <?php 
  
   include_once("common.php");
     $plan_info = $_SESSION["plan_info"] ;
   	$result_array_qry = " SELECT * FROM  plan_details_page WHERE title = '$plan_info' ";
    $result = mysqli_query($con,$result_array_qry);
	while($row = mysqli_fetch_row($result) )
     $total_expense =  $row[8];
 
   $title = $_POST['title_expense'];
   $date = $_POST['expense_date'];
   $amount = $_POST['amount'];
   $person_name = $_POST['person_name'];
 
    $total_expense = $total_expense + $amount; 
   
  function GetImageExtension($imagetype)
  {
	  if(empty($imagetype)) return false;
	  switch($imagetype){
		  case 'image/bmp': return '.bmp';
		  case 'image/gif': return '.gif'; 
		  case 'image/jpeg': return '.jpg';
		  case 'image/png': return '.png';
		  default: return false;
	  }
  }
  
  if(!empty($_FILES["uploadedimage"]["name"]))
  {
	  $file_name = $_FILES["uploadedimage"]["name"];
	  $temp_name=  $_FILES["uploadedimage"]["tmp_name"];
	  $imgtype = $_FILES["uploadedimage"]["type"];
	  $ext = GetImageExtension($imgtype);
	  $imagename = date("d-m-Y")."-".time().$ext;
	  $target_path = "img/".$imagename;
	  if(move_uploaded_file($temp_name,$target_path)){
     $insert_qry="INSERT INTO add_new_expense (title,date,amount,person,image_path,id,email) values('$title','$date','$amount','$person_name','$target_path','$plan_info','$email')";
	  $result = mysqli_query($con,$insert_qry);
	  $update_qry = "UPDATE plan_details_page SET total_expense = '$total_expense' WHERE
                     title = '$plan_info' "	;
      mysqli_query($con,$update_qry);					 
					 
	  }
	  }
	   else{
		   $insert_qry="INSERT INTO add_new_expense (title,date,amount,person,id,email) values('$title','$date','$amount','$person_name','$plan_info','$email')";
     $result = mysqli_query($con,$insert_qry);
	   $update_qry = "UPDATE plan_details_page SET total_expense = '$total_expense' WHERE
                     title = '$plan_info' "	;
      mysqli_query($con,$update_qry);
	  } 
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                 New Expense Added!
            </div>
        </div>
    </div>
</div>

Redirecting to View Plan Page..
<?php
$link =  $_SERVER['HTTP_REFERER'];    //storing previous page link in $link
header( "refresh:2;url = $link" ); 

?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>