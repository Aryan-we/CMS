<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="college_management_system";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if($connect){
    echo "Connection Ok";
}else{
    echo"Failed To Connect".mysqli_connect_error();
}
?>