<?php
$server="localhost";
$user="noble";
$pass="noble";
$db="nobleclg";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->$connecterror)
{
  die("connection is failure".$connecterror);
}
else{
    echo "sucessfully connected";
}
?>