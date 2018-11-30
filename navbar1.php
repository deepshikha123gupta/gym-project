<?php
include "header.html";  
?>
<head><link rel="stylesheet" type="text/css" href="navbarStyle.css"> 
<style>
 <style>
  /* Dropdown Button */
.dropbtn {
    background-color: green;
    color: white;
    padding: 0;
    font-size: 16px;
    border: none;
    cursor: pointer; 	
}
/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: yellow;
}
/* The container <div> - needed to position the dropdown content */
.pr {
    position: relative;
    display: inline-block; 
	margin-top:10px;     
}
/* Dropdown Content (Hidden by Default) */
.dpr {
    display: none;
    position: absolute;
    background-color: orange;
    /*min-width: 160px;*/
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;  
    margin-right:100px;  
    width:300px;	
}
/* Links inside the dropdown */
.dpr a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
/* Change color of dropdown links on hover */
.dpr a:hover {background-color: #ddd}

/* Show the dropdown menu
 (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}    
#myDropdown{
margin-top:5px; 
left:20%;
}    
.dropdown-menu{
    
    width:200px;
} 
  </style>

</head>
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
      <a class="navbar-brand" href="#myPage">Mohd. Sufian Khan</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="#">HOME</a></li>
	  <li><a href="#about">ABOUT</a></li>
	  <li class="dropdown"><a src="#" class="dropdown-toggle"  data-toggle="dropdown" style="display:inline-block;">GYM</a>
       <ul class="dropdown-menu" >
		  <li><a href="#">SHAKTI POWER GYM</a></li>
       </ul>
      </li>
	  <li><a href="#training">TRAINING</a></li>
	  <li class="dropdown"><a src="#" class="dropdown-toggle"  data-toggle="dropdown" style="display:inline-block;">ARTICLE</a>
       <ul class="dropdown-menu" >
		  <li><a href="#">HTML</a></li>
		  <li><a href="#">CSS</a></li>
		  <li><a href="#">Javascript</a></li>
       </ul>
      </li>
	  <li><a href="#contact">CONTACT</a></li>     
     
     
     <li class="dropdown"><a src="#"  class=" dropdown-toggle"  data-toggle="dropdown""><img src="photo/l.png" style="border-radius:50px;height:30px;width:35px;" /></a>
       <ul class="dropdown-menu dropdown-menu-right">  
       <li class="divider"></li>
      <li><a href="#">PRAGY SINGH <br /><br /> Edit Profile</a></li>
      <li class="divider"></li>
      <li><a href="#">LOGOUT</a></li>
    </ul>
      </li>
     
     
    
      </ul>    
      
   
      
    </div>
  </div>
</nav>      
