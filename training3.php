<?php 
include "header.html";
include "navbar.php";
include "login.php";
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  
 
<br><br>

    <!--carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
  
<!--scrolling-->
<div class="container-fluid text-center bg-grey" >
<h2>SELECT YOUR GOAL</h2><hr style="border:1px solid #f4511e;width:8%;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<a href="training.php">
			<img border="0" alt="male" src="photo/13.jpg" width="250" height="300" style="border: 2px solid white; box-shadow: 0 10px 35px 0 rgba(0, 0, 0, 0.5);">
			<div class="centered">WEIGHT GAIN</div>
			</a>
		</div>
		<div class="col-md-3">
			<a href="training.php">
		    <img border="0" alt="female" src="photo/12.jpg" width="250" height="300" style="border: 2px solid white; box-shadow: 0 10px 35px 0 rgba(0, 0, 0, 0.5);">
			<div class="centered">WEIGHT LOSE</div>
			</a>
		</div>
		<div class="col-md-3"></div>		
    </div>
</div>

<div class="container-fluid bg-grey">
<div class=" skill_con">
  <div class="skills sk"></div>
</div>
</div>


     <?php 
	 include "footer.php";
	 ?>
</body>
</html>
