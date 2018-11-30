<?php 
include "header.html";
	include "navbar.php"; 
	include "login.php";
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--navbar-->

  <!--scrolling-->
<div class="parallax"></div>
    <div class="caption">
	<br><br>
      <span class="border">REGISTER</span>
   
<form class="form-horizontal" action="" method="post"  name="f" onsubmit="return myfunc()">
<div class="container rg1">
          <h4 style="color:white;"><b>Please fill in this form to create an account.</b></h4>
          <hr>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
    </div>
  </div>   
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="mobile_no">E-mail:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Enter E-mail" required>
    </div>
  </div>
  
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="mobile_no">Mobile No.:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mobile" name="mobile_no" placeholder="Enter Mobile No." required><span id="s"></span>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
    </div>
  </div>   
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="address">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="cpassword" placeholder="Enter Password Again" required>
    </div>
  </div>
  <hr>
          
      <div class="form-group">
	<div class="row">
	<div class="col-sm-4"></div>
    <div class="col-sm-4 text-center">        
      <center><button type="submit" class="btn btn-default"  name="btn_register" >REGISTER</button>
	    <p>Already have an account? <a href="#">Sign in</a>.</p>
        <p>By creating an account you agree to our <a href="#"><br>Terms & Privacy</a>.</p>
	  </center>
    <div class="col-sm-4"></div>
	</div>
	</div>
  </div> 
  </form>
  <?php
include "dbconnect.php";
$name=$_POST["name"];
$email=$_POST["email"];
$mobile_no=$_POST["mobile_no"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
  

 if(isset($_POST["btn_register"])){   
              $q="SELECT max(s_no) FROM signup";
              $rec=mysqli_query($con,$q); 
                   $r=mysqli_fetch_row($rec);   
                   if($r[0]==""){
                    $s_no=1;   
                   } 
                   else{
                    $s_no=$r[0]+1;
                   }      
                   $e=$r[2];
                   if($password==$cpassword ){
                   $query="INSERT INTO signup VALUES(".$s_no.",'".$name."','".$email."',".$mobile_no.",'".$password."')";
                   mysqli_query($con,$query);
                   if(mysqli_affected_rows($con)>0)  {
                    echo '<script>alert("Registered Sucessfully.Please Login with your Email and Password to continue..")</script>';
                    }
                     else 
                     echo '<script>alert("Email Already Exit. Enter new Email")</script>';}   
                     else {
                        echo '<script>alert("password dont match.")</script>';
                     }
      }


?>

	  </div>
      
</div>
    <script>
	      
		
     function  myfunc(){
        var a=document.getElementById("mobile").value;
		 echo a;
		if(isNaN(a)){
		  document.getElementById("s").innerHTML="**enter valid mobile number";
		return false;
     
     }
		  
		  
	</script>
<?php 
	include "footer.php";
?>

</body>
</html>
