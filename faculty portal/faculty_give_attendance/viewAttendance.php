<?php
include("connection.php");
session_start();
$a=$_SESSION['id'];
echo $a;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance
    </title>
    <link rel="stylesheet" href="style.css">
    <style>
.container{
    background-color: #da2222;
    border: 1px solid green;
    
}
.container .box2 a input[type=button]{
    cursor: pointer;
    border-radius: 10px;
    border: none;
    padding: 10px;
}
    .container .box3 table tr{
    border: 2px solid;    
}
input[type=submit]{
    width:100%;
    cursor: pointer;
    border-radius: 10px;
    border: none;
    padding: 10px;
}
input[type=submit]:hover{
    background-color: red;
    color: white;
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
</head>
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
        <div class="box1">Student Attendance</div>
        <div class="box2">
        <a href="home.php"><input type="button" value="Add Student"></a>
        <a href="display.php"><input type="button" value="Back" ></a></div>
        <div class="box3">
        
            <table>
                <th>Serial Number</th><th>Dates</th><th>Show Attendance</th><th>Edit Attendance</th>
                <?php
                $result=mysqli_query($connect1,"select distinct date from attendance_record_by_facultyid_".$a.";");
                $sn=1;
                $counter=0;
                while($row=mysqli_fetch_array($result)){
                    ?>
                <tr>
                    <td><?php echo $sn;  ?></td>
                    <td><?php  echo $row['date'];?></td>   
                <form action="show_attendance.php"  method="POST">
                <td><input type="hidden" value="<?php echo $row['date'];?>" name="date">
                <input type="submit" value="Show Attendance" style=" padding:10px;">
                </form></td>
                <form action="edit_attendance.php"  method="GET">
                <td><input type="hidden" value="<?php echo $row['date'];?>" name="date">
                <input type="submit" value="Edit Attendance" style=" padding:10px;">
                </form></td>
                </tr>
                
                <?php
                $sn++;
                }
                ?>
            </table>
            </form>
            
        </div>
    </div>
    
</body>
</html>