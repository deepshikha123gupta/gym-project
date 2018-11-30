<?php 
	include "header.html";
		include "navbar.php"; 
		include "login1.php";  
		$id=$_GET['id']; 
		include "dbconnect.php";
		$q="SELECT * FROM blog where sr_no=$id AND blog='lblog'";  
            $res=mysqli_query($con,$q); 
           $row= mysqli_fetch_row($res);
           
		   
?>
  <link rel="stylesheet" href="blogStyle.css">
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container-fluid bg-grey">
<!---blog--->
	<div class="row">
  <div class="leftcolumn">
  
    <div class="card">
      <h2><?php echo $row[2];    ?></h2>
      <h5><?php echo $row[3];    ?></h5>
      <div class="fakeimg" ><img src="<?php echo "photo/".$row[1];   ?>" class="img-responsive"></div>
      <div class="card-content">
	  <h3><?php echo $row[5];  ?></h3>
			</div>
			</div>
  </div>     
  
  <?php   
  
  
  $q1="SELECT max(sr_no) FROM blog WHERE blog='lblog'";
$sr_no=mysqli_query($con,$q1);
$r1=mysqli_fetch_row($sr_no);
      
  ?>
  <div class="rightcolumn">
    <div class="card">
      <h3>POPULAR  POST</h3>    
      
      <?php    
          $q="SELECT * FROM blog where sr_no = $r1[0] AND blog='lblog'";
   $res=mysqli_query($con,$q); 
         $row=mysqli_fetch_row($res);
      ?>
      <div class="fakeimg"><img src="<?php echo "photo/".$row[1]; ?>" class="img-responsive"></div>
	  <div class="card-content"><h4><?php echo $row[2]; ?></h4></div>
	  <hr>
       
       <?php    
          $q="SELECT * FROM blog where sr_no = $r1[0]-1 AND blog='lblog'";
   $res=mysqli_query($con,$q); 
         $row=mysqli_fetch_row($res);
      ?>
       
       
     <div class="fakeimg"><img src="<?php echo $row[1]; ?>" class="img-responsive"></div>
	  <div class="card-content"><h4><?php echo $row[2]; ?></h4></div>
	  <hr>
     
      <?php  
       
      
      $q1="SELECT max(sr_no) FROM blog WHERE blog='rblog'";
$sr_no=mysqli_query($con,$q1);
$r1=mysqli_fetch_row($sr_no);  
$q="SELECT * FROM rblog where sr_no = $r1[0]";
   $res=mysqli_query($con,$q); 
   
      $row=mysqli_fetch_row($res);
      ?>
      
      <div class="fakeimg"><img src="<?php echo $row[1]; ?>" class="img-responsive"></div>
	  <div class="card-content"><h4><?php echo $row[2]; ?></h4></div>
    </div> 
    
  </div>
</div>

</div>
<?php 
include "footer.php";
?>
</body>
</html>
