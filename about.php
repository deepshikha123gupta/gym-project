<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link    rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="training_galleryStyle.css">
  <link rel="stylesheet" href="reviewStyle.css">
  <link rel="stylesheet" href="cardStyle.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <?php 
  include "navbar.php";
  include "login.php";
  ?>
<div id="about" class="container-fluid  bg-grey" >
	<h2 style="text-align:center;">About </h2>
	<hr style="border:1px solid #f4511e;width:5%;">
	<div class="card" >
		<div class="row">
			<div class="col-md-8" style="padding:10px 40px 10px 40px;">
				<h2>Mohd. Suffiyan Khan</h2>
				<h3 >-Fitness Trainer</h3> 
				<h4 style="text-align: left;"> Mohd Sufiyan Khan is a <b>MUSCLE BUILDING & FAT LOSS EXPERT</b>. He Transform thousands of people online and offline
                 both platform. He is a <b>Professional Fitness Trainer, Certified Personal Trainer, Aerobic & Anaerobic Exercise 
                 Programme Designer, Nutrition & Sports Supplement Consultant Also a Special Population Programme
                 Designer (Diabetes,Cholesterol,Asthma,Blood pressure, Thyroid etc.)</b></h4></br>
                 <h3>PERSONAL INFORMATION & BACKGROUND</h3>
                 <hr style="border:1px solid #f4511e;width:30%;">
                                                                
                    <div class="table-responsive">          
                    <table class="table table-bordered" style="text-align:left ; ">
                    <tr>
                    <td>NAME </td>
                    <td>MOHD SUFIYAN KHAN</td>
                    </tr>
                    </tr>
                    <td>LOCATION </td>
                    <td>ALLAHABAD (U.P INDIA)</td>
                    </tr>
                    <tr>
                    <td>OCCUPATION </td>
                    <td>FITNESS TRAINER, PERSONAL TRAINER, NUTRITION & SPORTS SUPPLIMENT CONSULTANT</td>
                    </tr>
                    </table>
                    </div>
                                     
                    </br>
                    <h3>CERTIFICATION</h3> 
                    <hr style="border:1px solid #f4511e;width:12%;">                                         
                    <div class="table-responsive">          
                    <table class="table table-bordered" style="text-align:left;">
                    <tr>
                    <td><b>PERSONAL TRAINER (NCSF)</b></td>
                    </tr>
                    <tr>
                    <td><b>CERTIFIED FUNCTIONAL TRAINER</b> from Classic fitness academy.</td>
                    </tr>
                    <tr>
                    <td>Certificate  For <b>EFFECT OF HORMONES ON EXERCISE & PERFORMANCE (ACE approved)</b></td>
                    </tr>
                    <tr>
                    <td>Certificate FOR  <b>SUPPLIMENT FOR OPTIMUM PERFORMANCE</b></td>
                    </tr>
                    <tr>
                    <td><b>Level 1 KETTLEBELL certification</b> from Ballistic kettlebell Fitness Academy (ACE Approved).</td>
                    </tr>
                    <tr>
                    <td><b>FIRST RESPONDER TRAINING (CPR)</b> from VIVO healthcare.</td>
                    </tr>
                    </table>
                    </div>
                   	</br>
                    <h4 style="text-align: left;">
                    When I Started I was tired of being skinny and wanted to look muscular and smart.
                    And I love it because as quoted by Arnold Schwarzenegger "being average is the worst thing you can be" 
                    lifting weights makes me unique and different from everyone else, different from the average Joe who
                    just goes to his boring job that he hates but gets home just in time to watch his favorite TV program.
                    This is my passion and what I live for. Giving every set everything you have every time you're in the 
                    gym leaving nothing is just such a good feeling, then knowing that next time you're in the gym you have 
                    to outdo that previous workout always doing better than what you have previously done, nothing can compare,
                    it just makes me feel so ALIVE.</h4>
					<div style="margin: 24px 0;"> 
					<a href="#"><i class="fa fa-whatsapp"></i></a>  
					<a href="#"><i class="fa fa-instagram"></i></a>  
					<a href="#"><i class="fa fa-facebook"></i></a> 
					</div>
			</div>
			<div class="col-md-4 ">
				<img class="img-responsive" src="photo/sufiyan.jpg" alt="trainer"  style="width:500px;height:400px;" > 
			</div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>
</body>
</html>