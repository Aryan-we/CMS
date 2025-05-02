<?php
include("connection.php");
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
        
    </style>
</head>
<body>
<div class="header">
        <div class="item1">
            <img src="./logo.jfif"alt="college logo" height="200px" width="200px">
        </div>
        <div class="item2" style="background-color:#da2222;">
            <h1>Shambhunath Institute Of Engineering and Technology</h1>
            <hr style="background-color:black; ">
            <h4>Jhalwa, Prayagraj, Uttar Pradesh, Pin Code:211015</h4>
        </div>
    </div>
    <h1>Faculty Data</h1><div style="width:100%;height:50px; background-color:#da2222;display:flex;justify-content:center;align-items:center;s">
    <div style="color:white;font-size:25px; cursor:pointer;"></div>
    <a href="../login.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;">Logout</div></a>
    </div>
    <!--<a href="insert.php" class="back">Back</a> -->
    <table>
       
        <thead>
            <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Experience</th>
            <th>Email</th>
            <th>Department</th>
            <th>Register Id</th>
            <th>Salary</th>
            <th>Gender</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Location</th>
            <th>Opeation</th>
        </tr>
        <?php
        $query="select * from faculty_details";
        $result=mysqli_query($connect,$query);
        $length=mysqli_num_rows($result);
        $num=1;
      //  $row=mysqli_fetch_assoc($query);
        while($length>0){
            $row=mysqli_fetch_assoc($result); 
        
        ?>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['experience'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['department'];?></td>
                <td><?php echo $row['register_id'];?></td>
                <td><?php echo $row['salary'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['location'];?></td>
                <td><a href="delete.php?delete=<?php echo $row['id'];?>" onclick="return confirm('Are you sure do you want to delete this data');">DELETE</a>
            &nbsp<a href="update.php?edit=<?php echo $row['id'];?>">EDIT</a></td>
            </tr>
        </tbody>
        <?php
        $length=$length-1;
        $num+=1;
        }
        ?>
    </table>
</body>
</html>