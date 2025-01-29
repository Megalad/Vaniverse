<?php
$host="localhost";
$port=3307;
$user="root";
$password="";
$db="sample";

$con=new mysqli($host,$user,$password,$db,$port);
if($con->connect_errno)
{
    echo "connection fail";
}
else{
    echo "Success";
}