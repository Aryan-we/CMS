<?php

include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
    <script src="../jquery.js"></script>
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
.textfield,select{
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
        <h1>Admin Login</h1>
        <form  action="#" method="POST" autocomplte="off">
        <div class="form">
            <input type="text" name="email" class="textfield" placeholder="Email ">
            <input type="text" name="password" class="textfield" placeholder="Password">
            <select name="option" id="option">
                <option value="1">Select Option</option>
                <option value="2">Registered Records</option>
                <option value="3">Faculty Records</option>
                <option value="4">Library portal</option>
                <option value="5">Student Records</option>

            </select>
            
            <input type="submit" name="login" value="Login" class="btn">
            
        </form>
    </div>
    
</body>
<script>
    function forgetpassword(){
        alert('Not Available');
    }
</script>
</html>
<?php

if(isset($_POST['login']) ){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email) and !empty($password)){
    $query="select * from admins where email='$email' and password='$password';";
    //$id="select id from admins where email='$email' and password='$password'";
    $data=mysqli_query($connect2,$query);
    $total=mysqli_num_rows($data);
    $record=mysqli_fetch_assoc($data);
    //$id=$record['id'];
    #echo $id;
    if($total >= 1){
        //$_SESSION['id']=$id;
        $opt=$_POST['option'];
        if($opt==2){
            header('location:./display.php');  
        }elseif($opt==3){
            header('location:./faculty portal/display.php');
        }elseif ($opt==4) {
            header('location:../LMS/index.php');
        }elseif ($opt==5) {
            header('location:./student portal/display.php');
        }
        //header('location:./display.php');
        //echo "<script>alert('Login Ok');</script>";

    }else{
        echo "<script>
        alert('Login Failed');
         </script>";
    
        
    }
}else{
    echo "<script>
    $('document').ready(function(){
    alert('Please fill all the fields');})
     </script>";
   
}
}

?>
