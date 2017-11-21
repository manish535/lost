<?php

$server="localhost";
$db="mydb";
$user="root";
$password="";

$conn=new mysqli($server,$user,$password, $db);

if($conn->connect_error)
{
    die("error");
}
else
{
    //echo "connected";
}
?>