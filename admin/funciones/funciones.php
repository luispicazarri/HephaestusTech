<?php
$conn=new mysqli('localhost','root','','mydb');

if($conn->connect_error)
{
echo $error -> $conn->connect_error;
}

?>