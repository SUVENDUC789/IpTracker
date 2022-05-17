<?php

$servername="localhost";
$username="root";
$password="";
$database="ip_tracker";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo "Sad check it".mysqli_connect_error();
}


?>