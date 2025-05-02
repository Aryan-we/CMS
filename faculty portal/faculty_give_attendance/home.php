<?php
include("connection.php");
session_start();
$a=$_SESSION['id'];
#echo $a;
$query="select * from faculty_details where id='$a'";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
$name1=$row['name'];
$designation=$row['designation'];
$experience=$row['experience'];
$email=$row['email'];
$gender=$row['gender'];
$salary=$row['salary'];
$register_id=$row['register_id'];
$image= $row['image'];
if(isset($_POST['submit']) and !empty($_POST['name']) and !empty($_POST['roll_no'])){
    $name=$_POST["name"];
    $roll_no=$_POST["roll_no"];
    $query="insert into attendance_by_facultyid_".$a."(name,roll_no) values('$name','$roll_no');";
    $result=mysqli_query($connect1,$query);
    if($result){
        echo "<script>alert('Data Save Successfully');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance
    </title></head>
    <style>
body{
    height: 100vh;
    margin: 0px;
    padding: 0px;
}
.container{
    margin:2% auto;
    text-align: center;
    border: 1px solid green;
    height: 50%;
    background-color: #da2222;
    
}
.container .box1{
    background-color: #eee;
    padding: 5px;
    font-size: 30px;
    margin: 10px;
}
.container .box2{
    display: flex;
    justify-content: space-around;
    text-align: center;
}
.container .box2 a input{
    padding: 5px;
    cursor: pointer;

}
.container .box3 form input{
    width: 90%;
    padding: 10px;
    margin: 10px;
}
.container .box3 form input[type=submit]{
    width: 20%;
    cursor: pointer;
    border-radius: 10px;
    border: none;
}
.container .box2 a input[type=button]{
    cursor: pointer;
    border-radius: 10px;
    border: none;
    padding: 10px;
}
.date{
    font-size: 30px;
    color: green;
}
.header{
    display:flex;
    flex-direction:row;
}
.header .item2{
    width:100%;
    text-align:center;
}
.header .item2 h1{
    font-size: 40px;
    font-weight: 10;
}
.header .item2 h4{
    font-size: 20px;
    font-weight: 10;
}
</style>
<body>
    
<div class="header">
        <div class="item1">
            <img src="./logo.jfif"alt="college logo" height="200px" width="200px">
        </div>
        <div class="item2">
            <h1>Shambhunath Institute Of Engineering and Technology</h1>
            <hr style="background-color:black; ">
            <h4>Jhalwa, Prayagraj, Uttar Pradesh, Pin Code:211015</h4>
        </div>
    </div>
    <div class="container">
    <div style="width:100%;height:50px; background-color:#da2222;display:flex;justify-content:space-around;align-items:center;">
    <a href="../faculty.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;">Home</div></a>
    <a href="../my profile/logout.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;">Logout</div></a>
    </div>
        <div class="box1">
            Student Attendance by Faculty:<?php echo "<font style='color:red;'>$name1</font>"?></div>
        <div class="box2">
        <a href="#"><input type="button" value="Add Student"></a>
        <a href="display.php"><input type="button" value="Add Attendance"></a>
        </div>
        <div class="box3">
        <form action="#" method="POST">
            <input type="text" placeholder="Student Name" name="name">
            <input type="text" placeholder="Roll Number" name="roll_no">
            <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>