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
	  
	  
	  <li><a href="transaction.php">Send Review</a></li>
	  
	  <li><a href="#contact">VIEW MEMBERS</a></li>
      
      
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


