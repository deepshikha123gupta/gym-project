<?php
include "header.html";

include "dbconnect.php";
session_start();

if($_SESSION['uemail']==null){
    header('location:index1.php');
}
else {
$uemail=$_SESSION["uemail"];
echo $uemail; 
$photo=$_POST["photo"];
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$dob=$_POST["dob"];
$mobile_no=$_POST["mobile_no"];
$alt_mobile_no=$_POST["alt_mobile_no"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$occupation=$_POST["occupation"];
$address=$_POST["address"];
$subscription=$_POST["subscription"];
$training_type=$_POST["training_type"];
$amt=$_POST["amt"];
$amt_status=$_POST["amt_status"];
$pending_amt=$_POST["pending_amt"];
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];
$trainer=$_POST["trainer"];
$facility=$_POST["facility"];   
$password=$_POST["mobile_no"];   

$query="SELECT * FROM registration WHERE registration_id='$uemail'";
       $res=mysqli_query($con,$query);
           $row= mysqli_fetch_row($res);  
 $query1="SELECT * FROM upload_file WHERE registration_id='$uemail'"  ; 
          $res1=  mysqli_query($con,$query1);    
          $diet_plan=mysqli_fetch_row($res1);   
          echo $row1[0]; 
          
 $query2="SELECT * FROM msg WHERE registration_id='$uemail'";
    $res2=     mysqli_query($con,$query2);  
           $row2=   mysqli_fetch_row($res2);

?>   


<html>
<head><link rel="stylesheet" type="text/css" href="anavbarStyle.css"> </head>  
<style>
.f{
    margin-top:130px;
}  
h3{
    
    margin-left: 11px;
}
</style>   
<!--navbar -->   


<link rel="stylesheet" type="text/css" href="navbarStyle.css"> 
<!--navbar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">Welcome! <?php echo $row[3]." ".$row[4];  ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#">HOME</a></li>
	  
	  <li><a href="user_msg.php">MESSAGE</a></li>
	  <li><a href="#" data-toggle="modal" data-target="#loginModal">Send Review</a></li>
      <li class="dropdown"><a src="#"  class=" dropdown-toggle"  data-toggle="dropdown""><img src="<?php $r="photo/";  echo $r.$row[2];  ?>" style="border-radius:50px;height:30px;width:35px;" /></a>
       <ul class="dropdown-menu dropdown-menu-right">  
       <li class="divider"></li>
      <li style="color: red;"><a href="edit_profile.php"><?php  echo $row[3]."",$row[4];  ?><br /><br /> Edit Profile</a></li>
      <li class="divider"></li>
      <li><a href="index1.php">LOGOUT</a></li>
    </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>        

<script>
$(document).ready(function(){
    $("#b").click(function(){
        $("#c").toggle();
    });
});
</script>

<div class="container f"> 
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8"> 
<center><h1>MESSAGES RECEIVED</h1>  </center>
  <hr style="border:1px solid #f4511e;width:30%;"> 
<div class="table-responsive">
<form method="post" action="">
<table class="table table-sm table-bordered">
<tr>  <td> DATE  <?php echo "  ".":"."  ".$row2[2]; ?></td><td> <input name="btn" type="submit" id="b" value="SHOW MESSAGE"/></td></tr> 
<tr><td colspan="2"><p id="c">    <?php 

           if(isset($_POST["btn"])){
            
            $query="UPDATE MSG SET status='READ'";
                $res=    mysqli_query($con,$query);  
                echo $row2[1];
           }


 ?></p></td></tr>
</table> 
</form>
</div>

</div>
<div class="col-md-2"></div>
</div>
</div>
 
<?php 
 


}
?>