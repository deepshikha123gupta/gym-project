<?php  
        include "dbconnect.php";
        $email=$_POST["email"];
        $password=$_POST["password"];    
        
        if(isset($_POST["btn_login"])){      
		    if($email=='admin' && $password=='admin'){    
			    header('location:anavbar.php');	 
			echo '<script>alert("Login Sucessful")</script>';  
			}  
			else {
        $query="SELECT * FROM registration WHERE registration_id='$email' AND password='$password'";
                   $res= mysqli_query($con,$query); 
                   $r= mysqli_fetch_row($res);     
                   $count = mysqli_num_rows($res);
                   if($count==1){  
                         session_start();                
                         $_SESSION['uemail']=$email; 
                         $_SESSION['pwd']=$password;
                    echo '<script>alert("Login Sucessful")</script>';  
					  header('location:navbar2.php');  
					  
                   }  
				   else 
                       echo '<script>alert("Email or Password do not match")</script>';
                   }  
				   }
        ?>

<style>  
.modal img{
margin-top: -18%; 
}
.modal-content img{
width:30%;
border-radius:50%;
left:65%;
position: absolute;
} 
.modal {

overflow:auto;
 background-color: rgb(0,0,0); 
 background-color: rgba(0,0,0,0.4); 
 margin-top: 100px; 
 
} 

</style>

 <!--Modal login --> 
		     <div class="modal" id="loginModal" role="dialog">
			 <div class="modal-dialog">  
			 <!--modal content -->
			 <div class="modal-content">
			 <div class="modal-header">  
			     <button type="button" class="close" data-dismiss="modal">&times;</button>        
			    <center><img src="photo/l.png" class=""></center>  <br /> <br /><br />
				 
			 </div>		 
			 <div class="modal-body"> 
			     <form method="post" action="">
				    <div class="form-group">
                        <label for="t3" >Email</label> 
                        <div class="input-group">
                        <span class="input-group-addon" ><i class="glyphicon glyphicon-user" ></i></span>
                        <input type="text" class="form-control" id="t1" name="email" placeholder="Enter Email" required="">
                        </div> 
                    </div>        
					
					<div class="form-group">
                        <label for="t3" >Password</label> 
                        <div class="input-group">
                        <span class="input-group-addon" ><i class="glyphicon glyphicon-user" ></i></span>
                        <input type="password" class="form-control" id="t1" name="password" placeholder="Enter Password" required="">
                        </div> 
                    </div>      
                   
            <input type="submit" value="login" class="btn btn-primary btn-block" name="btn_login" style="width="100%"><br>
			<span class="psw"> <a href="#" style="color:FC3F00;">forgotten password?</a></span> <br>
				 </form>
			 </div>  	 
			 <div class="modal-footer">
			 </div> 
			 </div> 
			 </div>	 
			 </div>
		<!-- Modal end -->     
		