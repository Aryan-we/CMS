<?php
$connect=mysqli_connect("localhost","root","","college_management_system");
if($connect){
   // echo "Connecton OK";
}else{
    echo "Connection Failed";
}
$connect2=mysqli_connect("localhost","root","","lms");
if($connect){
   // echo "Connecton OK";
}else{
    echo "Connection Failed";
}
?>