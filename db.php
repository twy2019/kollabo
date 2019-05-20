<?php
$connection = mysqli_connect('localhost','root','','kollabo');
if(!$connection){
    
    die("ERROR CONNECTING DATABASE ". mysqli_error($connection));
}


?>


 