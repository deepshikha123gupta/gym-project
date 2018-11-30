<!DOCTYPE html>
<html lang="en">
<head>
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
  
<!-- Container (Pricing Section) -->
<div class="container-fluid bg-grey">
  <div class="text-center">
    <h2>Training</h2>
	<hr style="border:1px solid #f4511e;width:8%;">
	<h4>Choose a training plan that works for you</h4>
  </div>
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph">
          <h3>Personal Training</h3>
        </div>
        <div class="panel-body pb">
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
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph">
          <h3>Premium Personal Training</h3>
        </div>
        <div class="panel-body pb">
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
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading ph">
          <h3>Super Premium Personal Training</h3>
        </div>
        <div class="panel-body pb">
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

<!---gallery-->
 <!---gallery-->
      <div class="container-fluid gallery bg-grey text-center">
		<h2>Fitness Test</h2>
	<hr style="border:1px solid #f4511e;width:6%;">
	<div class="row gal">
  <div class="column " >
    <div class="content gall">
      <img src="photo/g3.jpg" class="img-responsive" alt="Mountains">
      <h3>Pre-exercise Screening Test</h3>
    </div>
  </div>
  <div class="column ">
    <div class="content gall">
     <img src="photo/g2.jpg" class="img-responsive" alt="Mountains" >
      <h3>Assesment of Physical Fitness</h3>
    </div>
  </div>
  <div class="column ">
    <div class="content gall">
      <img src="photo/g5.jpg" class="img-responsive" alt="Mountains">
      <h3>Personal Training</h3>
   </div>
  </div>
  <div class="column ">
    <div class="content gall">
      <img src="photo/g4.jpg" class="img-responsive" alt="Mountains">
      <h3>Nutrition & Supplement</h3>
    </div>
  </div>
<!-- END GRID -->
	  </div>
	  </div>

     <?php 
	 include "footer.php";
	 ?>

</body>
</html>
