<!DOCTYPE html>
<?php error_reporting(0) ?>
<?php include "db.php";?>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link href ="lcss/style.css" rel ="stylesheet" type ="text/css">
    
    <?php  
    
    if(isset($_POST['submit'])){
        
      $username = $_POST['uname'];
      $password = $_POST['pass'];
        
         
    $username = mysqli_real_escape_string($connection,$username);
	$password = mysqli_real_escape_string($connection,$password);
        
        $query = "SELECT * FROM student_signup WHERE username = '{$username}'";
        $queryt = "SELECT * FROM teacher_signup WHERE username = '{$username}'";
  $result = mysqli_query($connection, $query);
        $resultt = mysqli_query($connection, $queryt);
        
    if(!$result){
       die("QUERY FAILED ". mysqli_error($connection));
    }
        
        while($row = mysqli_fetch_array($result)){
       $db_user  = $row['username']; 
       $db_password =$row['password'];
       $db_email =$row['email'];
      
        
    }
        
        while($rowt = mysqli_fetch_array($resultt)){
       $db_usert  = $rowt['username']; 
       $db_passwordt =$rowt['password'];
       $db_emailt =$rowt['email'];
      
        
    }
        
        if($username == $db_user && $password == $db_password){
            
            if($username == "" && $password == ""){
                 echo "<center><h2>Fill login details</h2></center>";
                
            }else{
            
            
            $_SESSION['username'] = $db_user;
            $_SESSION['email'] = $db_email;
        
       header("Location: ./chat.php");
            }
           
        }else if($username == $db_usert && $password == $db_passwordt){
            $_SESSION['username'] = $db_usert;
            $_SESSION['email'] = $db_emailt;
            
             header("Location: ./teacher.php");
        }
        
        else {
            
            echo "<center><h2>Invalid login details</h2></center>";
        }
    }
    
     ?>
    
    
</head>
<body>
  <div class="login-page">
  <div class="form">
    
    <form action="" method="post" class="login-form">
      <input type="text" name="uname" placeholder="username" required/>
      <input type="password" name="pass" placeholder="password" required/>
      <input type="submit" name="submit" value="login" id="btnn">
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    </form>
  </div>
</div>

</body>
</html>