<?php 
include "header.html";
include "navbar.php";
include "login.php";
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
 

<br><br>
    <!--carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
     <div class="carousel-inner" role="listbox">
      <div class="item active" id="item">
        <img src="photo/g8.jpg" alt="New York" width="1350" height="590">     
      </div>

      <div class="item" id="item">
        <img src="photo/g11.jpg" alt="Chicago" width="1350" height="590">
        </div>
    
      <div class="item" id="item">
        <img src="photo/g12.jpg" alt="Los Angeles" width="1350" height="590">     
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- Container (Contact Section) -->
<div class="container-fluid bg-grey">
  <h2 class="text-center">ENQUIRY</h2>
  <div class="row">   
  <form action="" method="post">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> NAINI, ALLAHABAD</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8960712228, +91 9125827852</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sufiyan11btece117@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control"  name="name" placeholder="Name" type="text" required>
        </div>
      </div>
	  <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control"  name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      
	  <div class="row">
		<div class="col-sm-6 form-group">
          <input class="form-control"  name="mobile_no" placeholder="Contact No." type="text" required>
        </div>
      </div>
      <textarea class="form-control"  name="query" placeholder="Query" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" name="btn_submit">Send</button>
        </div>
      </div>
    </div> 
    </form>    
    
    
    <?php 
    include "dbconnect.php";
    $name=$_POST["name"];
      $email=$_POST["email"];
        $mobile_no=$_POST["mobile_no"];
          $query=$_POST["query"];
       if(isset($_POST["btn_submit"])){
       $q="INSERT INTO enquiry VALUES('".$name."','".$email."',".$mobile_no.",'".$query."')";
          $res= mysqli_query($con,$q);
          if(mysqli_affected_rows($con)>0){
            echo '<script>alert("Query Submited!! We will contact you soon.")</script>'; 
          }  
          else {
            echo '<script>alert("error")</script>'; 
          }  
          }  
    ?>
  </div>
</div>
      <?php 
	  include "footer.php";
	  ?>

</body>
</html>
