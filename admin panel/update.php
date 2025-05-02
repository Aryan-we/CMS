<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
        $get_data=mysqli_query($connect,"select * from register where id='$edit_id'");
        if(mysqli_num_rows($get_data)>0){
            $row=mysqli_fetch_assoc($get_data);
        }
    }else{
        header('location:display.php');
     }
    ?>
    <form action="#" method="POST">
    <input type="hidden" name="data_id" value="<?php echo $row['id'];?>">
    <!--<font>Name : </font><input type="text" required autocomplete="off" name="name" value=<?php echo $row['username'];?>>
    <font>E-mail : </font><input type="mail" required autocomplete="off" name="mail" value=<?php echo $row['email'];?>></input>
    <font>Mobile :</font><input type="number" required autocomplete="off" name="number" value=<?php echo $row['mobile'];?>></input>
    <font>Address :</font><input type="text" required autocomplete="off" name="address" value=<?php echo $row['address'];?>></input>-->
    <textarea rows="3" cols="50" name="name" required><?php echo $row['name'];?></textarea>
    <textarea rows="3" cols="50" name="email" required><?php echo $row['email'];?></textarea>
    <textarea rows="3" cols="50" name="password" required><?php echo $row['password'];?></textarea>
    <textarea rows="3" cols="50" name="number" required><?php echo $row['mobile'];?></textarea>
    <textarea rows="3" cols="50" name="address" required><?php echo $row['address'];?></textarea>
    <input type="submit" class="btn" name="update" value="Update">
    

   </form> 
   <?php
   
    if(isset($_POST['update'])){
    $id=$_POST['data_id'];
    $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $mobile=$_POST['number'];
   $address=$_POST['address'];
        $query="update register set name='$name',email='$email',mobile='$mobile',address='$address',password='$password' where id='$id'";
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