<?php
 $servername= "localhost";
$username="root";
$password="";
$db="b-pay";
$con=mysqli_connect($servername, $username, $password,$db);
 if(mysqli_connect_errno())
 {
     echo "hello";
     return ;
}

?>