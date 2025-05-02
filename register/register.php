<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="../jquery.js"></script>
    <title>Register</title>
    <style>
        body{
    margin: 0;
    padding: 0;
    background-color: #da2222;

}
.container{
    width:35%;
    border:0px solid;
    background-color: white;
    border-radius: 5px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);

}
.container h1{
    padding-bottom: 20px;
    border-bottom:1px solid gray;

}
.form{
    padding-bottom: 15px;
    margin: 0 20px;

}
.textfield{
    width:100%;
    height:35px;
    font-size: 20px;
    border: 2px solid #FF0000;
    border-radius: 5px;
    box-sizing: border-box;
    padding-left: 10px;
    margin: 7px 0;

}
.btn{
    width: 100%;
    height: 35px;
    background-color: #FF0000;
    font-size: 20px;
    border: 0;
    border-radius: 5px;
    color: white;
    margin: 7px 0;
    cursor:pointer;

}

.btn:hover{
    background-color: blue;
}
.signup,.forgetpassword{
    font-size: 20px;
    padding:  10px 0;   
}
.link{
    text-decoration: none;
}
@media (max-width: 620px){
    .container{
        width:88%;
    }
}


    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form  action="#" method="POST" autocomplte="off">
        <div class="form">
            <input type="text" name="username" class="textfield" placeholder="Username">
            <input type="text" name="email" class="textfield" placeholder="Email">
            <input type="text" name="password" class="textfield" placeholder="Password">
            <input type="text" name="mobile" class="textfield" placeholder="Mobile Number">
            <input type="text" name="address" class="textfield" placeholder="Address">
        
            <input type="submit" name="register" value="Register" class="btn">
            <div class="signup">Already have an account  <a
             href="../Final Year Project/mainhome.php" class="link">Login Here</a></div>

        </div>
        </form>
    </div>
    
</body>
</html>

<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
if(isset($_POST['register']) and !empty($username) and !empty($password) and !empty($email) and !empty($mobile) and !empty($address)){
    $query="insert into register(name,email,password,mobile,address) 
    values('$username','$email','$password','$mobile','$address');";
    $data=mysqli_query($connect,$query);

    if($data){
        echo "<script>alert('Registration Successful');</script>";
        header("location:../Final Year Project/mainhome.php");
    }else{
        echo "<script>alert('Registration Failed');</script>";
    }
}else{
    echo "<script>
    $('document').ready(function(){
    alert('Please fill all the fields');})
     </script>";  
}
?>
