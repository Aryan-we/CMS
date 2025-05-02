<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body{
            text-align:center;
            font-family:cursive;
            background-color: #eee;
        }
        input{
            margin: 10px;
            width: 40%;
            font-size: 15px;
            padding:5px;
        }
        .btn{
            margin: 10px;
            width: 20%;
            font-size: 15px;
            padding:5px;  
        }
        .btn:hover{
            background-color: green;
            color:white;
            border:none;
        }
        a{
            text-decoration:none;
            border:1px solid;
        }
        .viewdata{
            border:0px solid;
            margin-right:460px;
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
    <h1>Admin Panel</h1>
    <a href="display.php" class="viewdata">View Register User Data</a>
    <form action="" method="POST">
        <input type="text" placeholder="Enter  Your Name" name="name" required><br>
        <input type="text" placeholder="Enter Your Email" name="email" required><br>
        <input type="text" placeholder="Enter Your Password" name="password" required><br>
        <input type="number" placeholder="Enter Your Mobile Number" name="mobile" required><br>
        <input type="text" placeholder="Enter Your Address" name="address" required><br>
        <input type="submit" value="Insert" class="btn" name="insert">
        
    </form>
    <?php
    if(isset($_POST['insert'])){
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $query="insert into register(name,email,mobile,password,address) values('$name','$email','$mobile','$password','$address');";
        $result=mysqli_query($connect,$query);
        if($result){
            echo "<script>alert('Data Saved Succcessfully');</script>";
        }else{
            echo "<script>alert('Failed in Data Insertion');</script>";
        }

    }
    ?>
</body>
</html>