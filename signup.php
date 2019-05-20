<!DOCTYPE html>
<?php
$connection = mysqli_connect('localhost','root','','kollabo');



?>
<html lang="en">
<head>
   <link href ="mcss/style.css" rel ="stylesheet" type ="text/css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 
 <?php
    
    if(!$connection){
        
     
        die("error");
    }
    
    if(isset($_POST['submit'])){
        
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
     
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){ 

echo "<center>Invalid email</center>";}
        
        
        $query = "INSERT INTO student_signup(firstname,lastname,username,password,email) VALUES ('$firstname','$lastname','$username','$password','$email')";
        
        $result = mysqli_query($connection,$query);
         header("Location: ./success.php");
        
        if(!$result){
           
            die("error");
        }
    
        
    }
    
    
    ?>
    
    
    
    <?php
    
    if(!$connection){
      
        die("error");
    }
    
    if(isset($_POST['submit2'])){
        
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $uname = $_POST['uname'];
      $pword = $_POST['pword'];
      $course = $_POST['course'];    
      $tmail = $_POST['tmail'];
     
         $query = "INSERT INTO teacher_signup(firstname,lastname,username,password,course,email) VALUES ('$fname','$lname','$uname','$pword','$course','$tmail')";
        
        $result = mysqli_query($connection,$query);
        
       if(!$result){
       die("QUERY FAILED ". mysqli_error($connection));
    }
        
    }
    
    
    ?>
 
 
 
  <script type = "text/JavaScript" >
    
function chck1(){
     var u = document.getElementById("username").value;
      var p1 = document.getElementById("password").value;
      var p2 = document.getElementById("confirm_password").value;
      var pl = p1.length;
      
      if(p1 ==p2 && pl > 8){
          return true;
      }
      else{
          alert("password must be the same and greater than 8 characters");
          return false;
      }
}
      
      function chck2(){
     var u = document.getElementById("username").value;
      var p1 = document.getElementById("tpassword").value;
      var p2 = document.getElementById("tconfirm_password").value;
      var pl = p1.length;
      
      if(p1 ==p2 && pl > 8){
          return true;
      }
      else{
          alert("password must be the same and greater than 8 characters");
          return false;
      }
}
</script>
  
           
        
<form action ="" method = "post" onsubmit = "return chck1()"   autocomplete = "off">
   <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="student" checked><label for="tab-1" class="tab">Student</label>
		<input id="tab-2" type="radio" name="tab" class="teacher"><label for="tab-2" class="tab">Teacher</label>
		<div class="login-form" >
		<form action ="register.php" method = "post" onsubmit = "return chck1()"   autocomplete = "off">
			<div class="student-htm">
				<div class="group">
					<label for="user" class="label">Firstname</label>
					<input id="user" name = "firstname" type="text" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Lastname</label>
					<input id="user" name = "lastname" type="text" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="username" name = "username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="password" type="password" name = "password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="confirm_password" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" name = "email" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" name =submit value="Sign Up">
				</div>
				<div class="foot-lnk">
					<label style="color:#00ffff" for="tab-1"><cennter><a href="login.php"> Already Member?</a></cennter>
                  
				</div>
				
				<div class="hr"></div>
				
                				
			</div>
			</form>
			<form action ="" method = "post" onsubmit = "return chck2()"   autocomplete = "off">
			<div class="teacher-htm">
			
			    <div class="group">
					<label for="user" class="label">Firstname</label>
					<input id="user"  type="text" name="fname" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Lastname</label>
					<input id="user" type="text" name="lname" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="uname" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="tpassword" type="password" name="pword" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="tconfirm_password" type="confirm_password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Course</label>
					<input id="pass" type="text" name="course" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" name="tmail" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" name="submit2" value="Sign Up">
				</div>
				<div class="foot-lnk">
					<label style="color:#00ffff" for="tab-1"><cennter><a href="login.php"> Already Member?</a></cennter>
                  
				</div>
				<div class="hr"></div>
				
			</div>
			
		
        </div>
        </div>    
        </form>
	</div>
</div>
     
    
</body>
</html>