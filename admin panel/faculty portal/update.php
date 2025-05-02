<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel-Faculty Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
.container{
    background-color: aliceblue;
    border: 0px solid;
    max-width: 50%;
    margin:0 auto;
    text-align:center;

}
input{
    display: block;
    margin: 10px;
    padding: 10px;
    width: 90%;
    border: none;
    outline: none;
}
.btn{
    width:45%;
    background-color: green;
    cursor: pointer;
    border-radius:10px;
    margin:10px auto;
} 
.btn:hover{
    background: red;
    color: white;
}
a{
    text-decoration: none;
    display:block;
    border:0px solid;
    text-align:left;
    padding-left:45px;
    
}
.header{
    display:flex;
    flex-direction:row;
    border: 0px solid;
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
    <h1>Update Register Data</h1>
    <a href="./display.php">View Data</a>
    <?php
    if(isset($_GET['edit'])){
        $edit_id=$_GET['edit'];
        $get_data=mysqli_query($connect,"select * from faculty_details where id='$edit_id'");
        if(mysqli_num_rows($get_data)>0){
            $row=mysqli_fetch_assoc($get_data);
        }
    }else{
        header('location:display.php');
     }
    ?>
    <form action="#" method="POST">
    <input type="hidden" name="data_id" value="<?php echo $row['id'];?>">
    <textarea rows="3" cols="50" name="name" required><?php echo $row['name'];?></textarea>
    <textarea rows="3" cols="50" name="designation" required><?php echo $row['designation'];?></textarea>
    <textarea rows="3" cols="50" name="experience" required><?php echo $row['experience'];?></textarea>
    <textarea rows="3" cols="50" name="email" required><?php echo $row['email'];?></textarea>
    <textarea rows="3" cols="50" name="department" required><?php echo $row['department'];?></textarea>
    <textarea rows="3" cols="50" name="register_id" required><?php echo $row['register_id'];?></textarea>
    <textarea rows="3" cols="50" name="salary" required><?php echo $row['salary'];?></textarea>
    <textarea rows="3" cols="50" name="gender" required><?php echo $row['gender'];?></textarea>
    <textarea rows="3" cols="50" name="password" required><?php echo $row['password'];?></textarea>
    <textarea rows="3" cols="50" name="mobile" required><?php echo $row['mobile'];?></textarea>
    <textarea rows="3" cols="50" name="location" required><?php echo $row['location'];?></textarea>
    <input type="submit" class="btn" name="update" value="Update">
    

   </form> 
   <?php
   
    if(isset($_POST['update'])){
    $id=$_POST['data_id'];
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $experience=$_POST['experience'];
    $email=$_POST['email'];
    $department=$_POST['department'];
    $register_id=$_POST['register_id'];
    $salary=$_POST['salary'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $location=$_POST['location'];

        $query="update faculty_details set 
        name='$name',designation='$designation',experience='$experience',email='$email'
        ,department='$department',register_id='$register_id',salary='$salary',gender='$gender'
        ,password='$password',mobile='$mobile',location='$location' where id='$id'";
        $result=mysqli_query($connect,$query);
        if($result){
           
            header('location:display.php');
           
        }else{
            echo "Error in Updating Data";
        }
    }
   ?>
   </div>
</body>
</html>