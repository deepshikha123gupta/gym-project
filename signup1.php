<?php 
include "header.html";
include "navbar.php";
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--scrolling-->
<div class="parallax" ></div>
    <div class="caption">
	<br> <br>
      <span class="border">REGISTER </span>
    
    <!--Form-->
    <form action="" class="form-horizontal" method="post" name="f" onsubmit="return myfunc()">
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
      <input type="text" class="form-control" id="m" name="mobile_no" placeholder="Enter Mobile No." required><span id="message"></span>
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
           $name=$_POST["name"];
            $email=$_POST["email"];
             $password=$_POST["password"];
             $cpassword=$_POST["cpassword"];
             $mno=$_POST["mno"]  ;
             $res=mysqli_connect("localhost","root","");
                  mysqli_select_db($res,"gym1");   
                  if(isset($_POST["btn_register"])){
              $q="SELECT max(s_no) FROM signup";
              $rec=mysqli_query($res,$q); 
                   $r=mysqli_fetch_row($rec);   
                   if($s_no[0]==""){
                    $s_no=1;   
                   } 
                   else{
                    $s_no=$r[0]+1;
                   }   
                   
                   if($password==$cpassword){
                   $query="INSERT INTO signup VALUES(".$s_no.",'".$name."','".$email."',".$mno.",".$password.")";
                   mysqli_query($res,$query);
                   if(mysqli_affected_rows($res)>0)  {
                    echo '<script>alert("Registered Sucessfully.Please Login with your Email and Password to continue..")</script>';
                    }
                     else 
                     echo '<script>alert("Email Already Exit. Enter new Email")</script>';}
                     else echo '<script>alert("Password Do Not Match.")</script>';
                  
      }
      ?>

</div>
      <!--footer--->
<footer class="container-fluid text-center" style="background:black;height:250px;">
  <a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up" style="margin-bottom:30px;"></span></a>
  <div class="row">
	<div class="col-sm-4">
		<h4 style="color:red;">SHAKTI POWER GYM</h4><hr style="background-color:red;width:150px;">
	</div>
	<div class="col-sm-4 tabl" >
		<table >
		<tr>
			<td>HOME</td>
		</tr>
		<tr>
			<td>ABOUT</td>
		</tr>
		<tr>
			<td>CONTACT</td>
		</tr>
		<tr>
			<td>TRAINING</td>
		</tr>
		</table>
	</div>
	<div class="col-sm-4 ">
		<h5 style="color:white;">FOLLOW US ON:</h5>
		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>

	</div>
  </div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
 function myfunc(){
    
    var a=document.getElementById("m").value; 
    var p=document.getElementById("p").value; 
    var cp=document.getElementById("cp").value; 
      if(p!=cp){
        document.getElementById("cpas").innerHTML="** Password Do Not Match";
        return false;
    }  
    
     
    if(isNaN(a)){
        document.getElementById("message").innerHTML="** Enter Valid Mobile Number";
        return false;
    } 
    if(a.length<10){
        document.getElementById("message").innerHTML="**  Mobile Number must be 10 digit";
        return false;
    }   
    if(a.length>10){
        document.getElementById("message").innerHTML="**  Mobile Number must be 10 digit";
        return false;    
    } 
    if(a.charAt(0)!=9 && a.charAt(0)!=8 && a.charAt(0)!=7 && a.charAt(0)!=6){
        document.getElementById("message").innerHTML="**  Enter valid Mobile Number";
        return false;   
    }
   
   
   }
</script>

</body>
</html>
