<?php
include("./my profile/connection.php");
session_start();
$id=$_SESSION["id"];
$query="select * from student_details where id='$id'";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
//echo $name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body{
            text-align: center;
            font-size:20px;
            
            
        }
        table{
            margin: 10px auto;
        }
        th,td{
            border:2px solid;
        }
        a{
            text-decoration: none;
          
        }
        .back{
            border:0px solid;
            margin-right:320px;
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
   
table{
    width:100%;
    font-size: 20px;
    border: 2px solid;
}
td,th{
    border: none;
    text-align:center;
}
    </style>
</head>
<body>
<div class="header">
        <div class="item1">
            <img src="./img/logo.jfif"alt="college logo" height="200px" width="200px">
        </div>
        <div class="item2" style="background-color:#da2222;">
            <h1>Shambhunath Institute Of Engineering and Technology</h1>
            <hr style="background-color:black; ">
            <h4>Jhalwa, Prayagraj, Uttar Pradesh, Pin Code:211015</h4>
        </div>
    </div>
    <h1>Attendance Details</h1>
    <div style="width:100%;height:50px; background-color:#da2222;display:flex;justify-content:space-between;align-items:center;s">
    <a href="./student.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;">Home</div></a>
    <a href="./my profile/logout.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;">Logout</div></a>
    </div>
    <!--<a href="insert.php" class="back">Back</a> -->
    <table>
       
        <thead>
            <tr>
            <th>Serial No.</th>
            <th>Teacher Name</th>
            <th>Student Name</th>
            <th>Status</th>
            <th>Date</th>
            
            
        </tr>
        <?php
        
        $query="select * from faculty_details";
        $res=mysqli_query($connect,$query);
        
        $length=mysqli_num_rows($res);
        $num=1;
      //  $row=mysqli_fetch_assoc($query);
        while($length>0){
            $row=mysqli_fetch_assoc($res); 
            $con=mysqli_connect("localhost","root","","faculty_give_attendance");
        $q="select * from attendance_record_by_facultyid_".$row['id']." where name='$name'";
        $r=mysqli_query($con,$q);
        
        $l=mysqli_num_rows($r);
       
    
        while($l>0){
            $re=mysqli_fetch_assoc($r); 
        
    
        ?>
        </thead>
        <tbody>
            <tr>
                 <td><?php echo $num; ?></td>
                <td><?php echo $row['name'];?></td>
                
                <td><?php echo $re['name'];?></td>
                <td><?php echo $re['status'];?></td>
                <td><?php echo $re['date'];?></td>
                
                
            </tr>
        </tbody>
        <?php
        $l=$l-1;
        $num+=1;
        }
        ?>
        <?php
        $length=$length-1;
       
        }
        ?>
    </table>
</body>
</html>