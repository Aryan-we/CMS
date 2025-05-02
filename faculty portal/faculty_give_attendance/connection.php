<?php
$connect=mysqli_connect("localhost","root","","college_management_system");
if($connect){
    echo "Connection Ok";
}
$connect1=mysqli_connect("localhost","root","","faculty_give_attendance");
if($connect){
    #echo "Connection Ok";
}
?>