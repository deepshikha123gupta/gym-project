
<?php 
session_start(); 
include "header.html";
?>     

<?php 
include "dbconnect.php"; 
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

?>
<html>
<head><link rel="stylesheet" type="text/css" href="anavbarStyle.css"> </head>  
<style>
.profile{
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
<!--- modal review -->

<!--Modal login --> 
		     <div class="modal" id="loginModal" role="dialog">
			 <div class="modal-dialog">  
			 <!--modal content -->
			 <div class="modal-content">
			 <div class="modal-header">  
			     <button type="button" class="close" data-dismiss="modal">&times;</button>        
			    
				 
			 </div>		 
			 <div class="modal-body"> 
			     <form method="post" action="">
				    <div class="form-group">
                        <label for="t3" >Your Review</label> 
                        <div class="input-group">
                        <textarea class="form-control" name="review" style="width: 100%;"></textarea>
                        </div> 
                    </div>        
					
					<div class="form-group">
                        <label for="t3" >Rate Us</label> 
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="rating1" value="5star" >
                                <label class="form-check-label" for="rating1">
                                5 Star
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="rating2" value="4star">
                                <label class="form-check-label" for="rating2">
                                4 Star
                                </label>   
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="rating1" value="3star" >
                                <label class="form-check-label" for="rating1">
                                3 Star
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="rating2" value="2star">
                                <label class="form-check-label" for="rating2">
                                2 Star
                                </label>
                                </div>
                                           
                               </div>
                    </div>      
                   
            <input type="submit" value="Send Your Review" class="btn btn-primary btn-block" name="btn_review" style="width="100%""><br>
			
				 </form>
			 </div>  	 
			 <div class="modal-footer"> 
             <?php
             echo $uemail;?>
			 </div> 
			 </div> 
			 </div>	 
			 </div>
		<!-- Modal end -->   
        <link rel="stylesheet" type="text/css" href="loginStyle.css">   
		<?php  
          $review=$_POST['review']; 
          $rating=$_POST['rating'];
        if(isset($_POST["btn_review"])){
            $query="INSERT INTO user_review VALUES('".$uemail."','".$review."','".$rating."')";
                  $res= mysqli_query($con,$query); 
                  
                  if(mysqli_affected_rows($con)>0){
                    
                    echo '<script>alert("Review Send.")</script>';
                  }   
                  else {
                    echo '<script>alert("Error Try Again")</script>';
                  }
             
        }
        
        
        ?>

<div class="container profile">  
<form method="post" action="" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-4 "> 
            <div class="table-responsive" style="margin-top: 20px;">
            <table class="table table-sm table-bordered">
                <tr><td><center><img src="<?php $r="photo/";  echo $r.$row[2];  ?>" style="margin-top:5px;width:300px;height:340px;"/></center></td></tr>
                <tr><td><center><input type="text" readonly placeholder="registration ID" class="form-control" value="<?php echo $row[1];  ?>" /></center></td></tr>
                <tr><td><center><input type="file"  class="form-control-file" name="photo" /></center></td></tr>
                <tr><td><center><input type="button" value="download Schedule" class="btn btn-primary btn-block" /></center></td></tr>
                <tr><td><center><a href="<?php echo "plan/".$diet_plan[1]; ?>" download><input type="button" value="download Diet Plan" class="btn btn-primary btn-block" /></a></center></td></tr>
                 <tr><td><center><input type="button" value="Calculate Your BMR" class="btn btn-primary btn-block" /></center></td></tr>
            </table>
            </div>
        </div> 

<div class="col-md-8">  
        <div class="row">   
            <h3>PERSONAL INFORMATION</h3>
            <div class="col-md-6"> 
            <table class="table table-sm table-bordered">    
            <tr><td>FIRST NAME</td>
                 <td><input type="text" class="form-control" readonly name="f_name" value="<?php echo $row[3]; ?>" /></td></tr> 
                 <tr><td>LAST NAME</td>
                 <td><input type="text" class="form-control" readonly name="l_name" value="<?php echo $row[4]; ?>" /></td></tr>
                 <tr><td>DATE OF BIRTH</td>
                 <td><input type="date" class="form-control" readonly name="dob" value="<?php echo $row[5]; ?>" /></td></tr> 
                 <tr><td>MOBILE NO.</td>
                 <td><input type="text" class="form-control" readonly name="mobile_no" value="<?php echo $row[6] ?>"/></td></tr> 
                 <tr><td>ALTERNATE MOBILE NO.</td>
                 <td><input type="text" class="form-control" readonly name="alt_mobile_no" value="<?php echo $row[7]; ?>"/></td></tr> 
                 
            </table>
            </div>
            <div class="col-md-6">
              <table class="table table-sm table-bordered">
            <tr><td>GENDER</td>
                 <td><input type="text" class="form-control" readonly name="gender" value="<?php echo $row[8]; ?>"/></td></tr>
                 <tr><td>E-MAIl</td>
                 <td><input type="text" class="form-control" readonly name="email" value="<?php echo $row[9]; ?>"/></td></tr>  
                 <tr><td>OCCUPATION</td>
                 <td><input type="text" class="form-control"readonly name="occupation" value="<?php echo $row[10]; ?>"/></td></tr> 
                 <tr><td>Address</td>
                 <td><textarea class="form-control" readonly name="address"><?php echo $row[11] ?></textarea></td></tr>
            </table>
            </div> 
        </div>
        <div class="row">
                <h3>GYM INFORMATION</h3>
                <div class="col-md-6"> 
                    <table class="table table-sm table-bordered">
                         <tr><td>SUBSCRIPTION</td>
                         <td><input type="text" class="form-control" name="subscription" readonly value="<?php echo $row[12]; ?>"/></td></td></tr> 
                              
                         <tr><td>TRAINING TYPE</td>
                         <td><input type="text" class="form-control" name="occupation" readonly value="<?php echo $row[13]; ?>"/></td></td></tr>
                         
                         <tr><td>AMOUNT</td>
                         <td><input type="text" class="form-control" name="amt" readonly value="<?php echo $row[14]; ?>"/></td></tr>
                         
                         <tr><td>AMOUNT STATUS</td>
                         <td><input type="text" class="form-control" name="amt" readonly value="<?php echo $row[15]; ?>"/></td></tr>   
                          <tr><td>PENDING AMOUNT</td>
                         <td><input type="text" class="form-control" name="pending_amt" readonly value="<?php echo $row[16]; ?>"/></td></tr>  
                          
                    </table>
                </div>
                <div class="col-md-6">
                  <table class="table table-sm table-bordered">
                <tr><td>START DATE</td>
                         <td><input type="date" class="form-control" name="start_date" readonly value="<?php echo $row[16]; ?>"/></td></tr>
                          <tr><td>END DATE</td>
                         <td><input type="date" class="form-control" name="end_date" readonly value="<?php echo $row[17]; ?>"/></td></tr>
                     <tr><td>TRAINER</td>
                     <td><input type="text" class="form-control" name="trainer" readonly value="<?php echo $row[18]; ?>"/></td></tr>  
                     <tr><td>FACILITY</td>
                     <td><input type="text" class="form-control" name="trainer" readonly value="<?php echo $row[19]; ?>"/></td></tr>
                </table>
                </div>  
               
        </div>
</div>  
</form>      
</div>
</div>
</html>
<?php 
}
?>

