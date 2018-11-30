<?php
include "header.html";
$id=$_GET['id'];
include "dbconnect.php";  
$query="SELECT * FROM registration WHERE registration_id='$id'";
       $res=mysqli_query($con,$query);
           $row= mysqli_fetch_row($res); 
           include "profile_navbar.php";

?>