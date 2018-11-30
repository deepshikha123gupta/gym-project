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
  
  include "login1.php";  
  
  ?>
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
      <a class="navbar-brand" href="#myPage">Mohd Sufiyan Khan</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="index1.php">HOME</a></li>
	  <li><a href="#about">ABOUT</a></li>
	  <li><a href="gym.php">GYM</a></li>
	  <li><a href="training.php">TRAINING</a></li>
	  <li><a href="enquiry.php">ENQUIRY</a></li>
	  <li><a href="#blogg">BLOG</a></li>
	  <li><a href="#" data-toggle="modal" data-target="#loginModal">LOGIN</a></li>
	  <li><a href="signup.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>

  </nav>

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

<!-- Container (About Section) -->
<div id="about" class="container-fluid  bg-grey" >
	<h2 style="text-align:center;">About </h2>
	<hr style="border:1px solid #f4511e;width:8%;">
	<div class="card" >
		<div class="row">
			<div class="col-md-8" style="padding:10px 40px 10px 40px;">
				<h2>Mohd. Suffiyan Khan</h2>
				<h3 >Fitness Trainer</h3> 
				<h4> Mohd Sufiyan Khan is a MUSCLE BUILDING & FAT LOSS EXPERT. He Transform thousands of people online and offline
                 both platform. He is a Professional Fitness Trainer, Certified Personal Trainer, Aerobic & Anaerobic Exercise 
                 Programme Designer, Nutrition & Sports Supplement Consultant Also a Special Population Programme
                 Designer (Diabetes,Cholesterol,Asthma,Blood pressure, Thyroid etc.)</h4></br>
				<center><a href="about.php"><button class="btn btn-default">More</button></a></center>
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

<!----Values--->
<div class="container-fluid ">
	<h2 style="text-align:center;">Our Values</h2><hr style="border:1px solid #f4511e;width:8%;">
	<div class="row">
		<div class="col-sm-4">
			<video id="myVideo"width="420" height="270" controls muted="true" loop="true" autoplay="true">
			<source src="photo/g1.mp4" type="video/mp4"></video>
		</div>
		<div class="col-sm-8">
			<h4><strong>MISSION:</strong> As a personal trainer, my typical day could include:
			conducting fitness assessments to establish client fitness and skill levelholding one-on-one or group sessions with your clients
			elping clients with their workouts</h4><br>
			<p><strong>VISION:</strong> Customers are our priority. We are passionate about delivering exceptional, personalised customer service to all.
	  The ability to remain nimble and agile through lean, efficient actions. Think big, act small.We believe that we should all take ownership & have the courage to lead change.
	  If you change yourself, you change your world.</p>
		</div>
	</div>
</div>

<!---Blog--->
<?php    
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"gym1");
$q1="SELECT max(sr_no) FROM blog WHERE blog='lblog'";
$sr_no=mysqli_query($con,$q1);
$r1=mysqli_fetch_row($sr_no);

?>
<div class="container-fluid bg-grey " id="blogg" >
	<h2 style="text-align:center;">Blog </h2><hr style="border:1px solid #f4511e;width:5%;">
	<div class="row">
		<div class="col-md-8">
<?php
for($i=0;$i<3;$i++){
$q="Select * from blog where sr_no = $r1[0] AND blog='lblog'";
$res=mysqli_query($con,$q);
while($r=mysqli_fetch_array($res)){
include "lcard.php";
}
$r1[0]--;
}
?>
		</div>
		<div class="col-md-4" >
<?php
$q1="SELECT max(sr_no) FROM blog WHERE blog='rblog'";
$sr_no=mysqli_query($con,$q1);
$r1=mysqli_fetch_row($sr_no);
for($i=0;$i<2;$i++){
$q="Select * from blog where sr_no = $r1[0] AND blog='rblog'";
$res=mysqli_query($con,$q);
while($r=mysqli_fetch_array($res)){
include "rcard.php";
}
$r1[0]--;
}
?>
			</div>
		</div>
	</div>
	
<!---events--->

<div class="container-fluid gallery  text-center">
	<h2>Events</h2>
	<hr style="border:1px solid #f4511e;width:6%;">
	<div class="row gal">
		<div class=" col-md-6 " >
			<div class="content gall">
			<a href="galary.php" target="_blank">	<img src="photo/IMG_0194.jpg" class="img-responsive" alt="Mountains"></a>
				<h3>My Work</h3>
			</div>
		</div>
		<div class=" col-md-6 " >
			<div class="content gall">
			<a href="galary2.php" target="_blank">	<img src="photo/z.jpg" class="img-responsive" alt="Mountains"></a>
				<h3>My Work</h3>
			</div>
		</div>
	</div>
</div>

	  
<!---review--->


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
<?php    
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"gym1");
$q1="SELECT max(sr_no) FROM review";
$sr_no=mysqli_query($con,$q1);
$r1=mysqli_fetch_row($sr_no);
?>
    <!-- Wrapper for slides -->
    <div class="carousel-inner bg-grey" role="listbox">
      <div class="item active review">
<div class="timeline ">
  <?php
$q="Select * from review where sr_no=$r1[0]";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
?>
  <div class="container  ur" id="left">
    <div class="content urc">
		<p><img src="<?php echo "photo/".$r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
  <?php
$q="Select * from review where sr_no=$r1[0]-1";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>
  <div class="container  ur" id="right">
    <div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
<?php
  $q="Select * from review where sr_no=$r1[0]-2";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
?>
  <div class="container  ur" id="left">
		<div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
  </div>
     
      </div>

      <div class="item review">
<div class="timeline ">
  <?php
$q="Select * from review where sr_no=$r1[0]-3";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>
  <div class="container  ur" id="left">
    <div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
    <?php
$q="Select * from review where sr_no=$r1[0]-4";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>
  <div class="container  ur" id="right">
    <div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
    <?php
$q="Select * from review where sr_no=$r1[0]-5";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>
  <div class="container  ur" id="left">
		<div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
  </div>
     

        </div>
    
      <div class="item review">
<div class="timeline ">
  <?php
$q="Select * from review where sr_no=$r1[0]-6";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>
  <div class="container  ur" id="left">
    <div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
    <?php
$q="Select * from review where sr_no=$r1[0]-7";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>

  <div class="container  ur" id="right">
    <div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
    <?php
$q="Select * from review where sr_no=$r1[0]-8";
$res=mysqli_query($con,$q);
$r=mysqli_fetch_row($res);
  ?>
  <div class="container  ur" id="left">
		<div class="content urc">
		<p><img src="<?php echo $r[1]; ?>" class="media-object img-circle" style="width:60px">
		<?php echo $r[2]; ?></p>
		<p class="author">- <?php echo $r[3];?></p>
		<span class="fa fa-star <?php echo $r[4]; ?>"></span>
		<span class="fa fa-star <?php echo $r[5];?>"></span>
		<span class="fa fa-star <?php echo $r[6];?>"></span>
		<span class="fa fa-star <?php echo $r[7];?>"></span>
		<span class="fa fa-star <?php echo $r[8];?>"></span>
    </div>
  </div>
  </div>
     
      </div>
    </div>
</div>
 



<!--footer--->

<?php 
include "footer.php";
?>
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
</script>

</body>
</html>
