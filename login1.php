<?php  
        include "dbconnect.php";
        $email=$_POST["email"];
        $password=$_POST["password"];    
        
        $query="SELECT * FROM registration WHERE registration_id='$email' AND password='$password'";
                   $res= mysqli_query($con,$query); 
                   $r= mysqli_fetch_row($res);     
                   $count = mysqli_num_rows($res); 
                   
       $query1="SELECT * FROM signup WHERE email='$email' AND password='$password'";
                   $res1= mysqli_query($con,$query1); 
                   $r1= mysqli_fetch_row($res1);     
                   $count1 = mysqli_num_rows($res1);
        
        
        if(isset($_POST["btn_login"])){      
		    if($email=='admin' && $password=='admin'){    
			    header('location:anavbar.php');	 
			echo '<script>alert("Login Sucessful")</script>';  
			}  
			else   if($count==1){  
                         session_start();                
                         $_SESSION['uemail']=$email; 
                         $_SESSION['pwd']=$password;
                    echo '<script>alert("Login Sucessful")</script>';  
					  header('location:navbar2.php');  
					  
                   }  
				  else if($count1==1){      
				    header('location:training.php');
                    
				  }
                  
                  else{
                    
                  }
                    
				   }				   
        ?>
	
 <!--Modal login --> 
	<div class="modal" id="loginModal" role="dialog">
	<div class="modal-dialog">  
		<div class="modal-content">
			<div class="modal-header">  
				 <button type="button" class="close" data-dismiss="modal">&times;</button>        
				 <img src="photo/l.png" class="ava"> 
			</div>		 
			<div class="modal-body"> 
				<form>
					<div class="form-group">
						<label for="t3" >Email</label> 
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
							<input type="text" class="form-control" id="t1" name="t1" placeholder="Enter Email" required="">
							</div> 
					</div>      
					<div class="form-group">
						 <label for="t4">Password</label> 
							 <div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
							 <input type="password" class="form-control" id="t2" name="t2" placeholder="Enter Password" required > 
							 </div>  
					</div> 
						<input type="submit" value="login" class="btn btn-primary btn-block" name="l" style="width="100%""><br>
						<span class="psw"> <a href="#" style="color:FC3F00;">forgotten password?</a></span> <br>
				</form>
			</div>  
			<div class="modal-footer"></div> 
		 </div> 
	</div>	 
</div>
	<!-- Modal end -->     
		