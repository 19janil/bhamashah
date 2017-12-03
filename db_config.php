<?php
$conn=mysqli_connect('localhost','root','','bhamashah');
if(!$conn){
    echo "Db connection failed".mysqli_error();
}

//require_once('sendmail.php');
?>