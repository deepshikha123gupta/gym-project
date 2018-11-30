<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link    rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="training_galleryStyle.css">
   <link rel="stylesheet" href="training_panelStyle.css">
    <link rel="stylesheet" href="cardStyle.css">
	<script src="script.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
   <?php 
   include "navbar.php";
   include "login.php";
   ?>
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
        <img src="photo/g6.jpg" alt="New York" width="1350" height="590">     
      </div>

      <div class="item" id="item">
        <img src="photo/g11.jpg" alt="Chicago" width="1350" height="590">
        </div>
    
      <div class="item" id="item">
        <img src="photo/g8.jpg" alt="Los Angeles" width="1350" height="590">     
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

<!-- Container (About Section) -->
<div id="about" class="container-fluid  text-center bg-grey" >
<h2>About </h2><hr style="border:1px solid #f4511e;width:8%;">
  <div class="card" >
  <div class="row">
    <div class="col-md-8">
      
	  <h1>Shakti Power Gym</h1>
  <p class="title">Naini, Allahabad</p>
  
      <h4>We believe open, direct and supportive communication is the foundation of any successful organisation.
	  Our culture of creative innovation in people, processes and products bring ideas into reality delivering a sustained competitive advantage.
	  </h4><br>
      <p>We are committed to common goals. Effective communication and accountability makes our team achieve results greater than the sum of its parts.</p>
    <div style="margin: 24px 0;"> 
    <a href="#"><i class="fa fa-whatsapp"></i></a>  
    <a href="#"><i class="fa fa-instagram"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
	
	</div>
    <div class="col-md-4 ">
       <img class="img-responsive" src="photo/gy2.jpg" alt="Chania"  style="width:460px ;height:400px;margin:auto" > 
    </div>
  </div>
</div>
</div>

<div class="container-fluid ">
 <h2 style="text-align:center;"> Values</h2><hr style="border:1px solid #f4511e;width:8%;">
  <div class="row">
    <div class="col-sm-4">
      <video id="myVideo"width="420" height="270" controls muted="true" loop="true" autoplay="true">
  <source src="photo/gy1.mp4" type="video/mp4">
</video>
 
    </div>
    <div class="col-sm-8">
     
      <h4><strong>MISSION:</strong> We want to help you live a fit and healthy lifestyle! We do this by helping you find the most suitable equipment for your home gym,
	  studio, crossfit box or commercial gym, keeping your budget, lifestyle and fitness goals in mind. We stock a wide range of gym equipment, with strength equipment, cardio,
	  cross training and so much more. Our awesome team is always keen to help, so please call us to discuss your needs.</h4><br>
      <p><strong>VISION:</strong> Customers are our priority. We are passionate about delivering exceptional, personalised customer service to all.
	  The ability to remain nimble and agile through lean, efficient actions. Think big, act small.We believe that we should all take ownership & have the courage to lead change.
	  If you change yourself, you change your world.
	  </p>
    </div>
  </div>
</div>
<div  class="container-fluid bg-grey">

  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
<h2> Transformation</h2>
  <hr style="border:1px solid #f4511e;width:14%;">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	     <center><img src="photo/bfa.jpg" class="img-responsive" alt="Cinque Terre" width="500" height="500"></center>
      </div>
      <div class="item">
	   <center><img src="photo/bfa1.jpg" class="img-responsive" alt="Cinque Terre" width="500" height="500"></center>
      </div>
      <div class="item">
	  <center><img src="photo/bfa2.jpg" class="img-responsive" alt="Cinque Terre" width="500" height="500"></center>
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
</div>

<!-- Container (training Section) -->

<div class="container-fluid ">
  <div class="text-center">
    <h2>Training</h2>
	<hr style="border:1px solid #f4511e;width:8%;">
	<h4>Choose a training plan that works for you</h4>
  </div>
  <div class="row">
	<div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph2">
          <h3>Normal Training</h3>
        </div>
        <div class="panel-body pb2">
          <p> Unlimited communication via fit phase</p>
		  <p> Diet plan according to your goal </p>
          <p> Workout plan based on your goal</p>
          <p> Video call</p>
          <p> Weekly chating</p>
          <p> Supplement plan</p>
        </div>
        <div class="panel-footer">
          <h3>$5000</h3>
          <h4>per month</h4>
		  <h3>$12000</h3>
          <h4>3 month</h4>
          <a href="training1.html"><button class="btn btn-lg">Sign Up</button></a>
        </div>
      </div>      
    </div>
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph2">
          <h3>Personal Training</h3>
        </div>
        <div class="panel-body pb2">
          <p> Unlimited communication via fit phase</p>
		  <p> Diet plan according to your goal </p>
          <p> Workout plan based on your goal</p>
          <p> Video call</p>
          <p> Weekly chating</p>
          <p> Supplement plan</p>
        </div>
        <div class="panel-footer">
          <h3>$5000</h3>
          <h4>per month</h4>
		  <h3>$12000</h3>
          <h4>3 month</h4>
          <a href="training1.html"><button class="btn btn-lg">Sign Up</button></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph2">
          <h3>Premium Personal Training</h3>
        </div>
        <div class="panel-body pb2">
          <p> Pre-exercise screening & Test cosideration</p>
		  <p> Unlimited communication via fit phase</p>
		  <p> Diet plan according to your goal </p>
		  <p> Workout plan based on your goal</p>
          <p> Video call</p>
          <p> Monthly chating</p>
          <p> Supplement plan</p>
        </div>
        <div class="panel-footer">
          <h3>$8000</h3>
          <h4>per month</h4>
		  <h3>$20000</h3>
          <h4>3 month</h4>
          <a href="training1.html"><button class="btn btn-lg">Sign Up</button></a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph2">
          <h3>Super Premium Personal Training</h3>
        </div>
        <div class="panel-body pb2">
          <p> Assesment test</p>
		  <p> Pre-exercise screening & Test cosideration</p>
		  <p> Unlimited communication via fit phase</p>
		  <p> Diet plan according to your goal </p>
		  <p> Workout plan based on your goal</p>
          <p> Video call</p>
          <p> Monthly chating</p>
          <p> Supplement plan</p>
        </div>
        <div class="panel-footer">
          <h3>$10000</h3>
          <h4>per month</h4>
		  <h3>$25000</h3>
          <h4>3 month</h4>
          <a href="training1.html"><button class="btn btn-lg">Sign Up</button></a>
		  </div>
      </div>      
    </div>    
  </div>
</div>
<?php 
include "footer.php";
?>



</body>
</html>
