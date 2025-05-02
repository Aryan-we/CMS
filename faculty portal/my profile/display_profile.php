<?php include "connection.php";
session_start();
$id=$_SESSION['id'];
echo $id;
?>
<!doctype html>
<html>
<head>
<title>Faculty Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css file/studlog1.css">
</head>
<style>
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
    align-items:center;
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
<?php
$query="select * from faculty_details where id='$id'";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$designation=$row['designation'];
$experience=$row['experience'];
$email=$row['email'];
$gender=$row['gender'];
$salary=$row['salary'];
$register_id=$row['register_id'];
$image= $row['image'];
$gender=$row['gender'];
$department=$row['department'];
$mobile=$row['mobile'];
$location=$row['location'];
?>
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
          <div class="container-fluid">
          <div class="row">
              <div class="col-12 exam-section mt-2" style="display:flex;justify-content:space-between;align-items:center;">
              <a href="../faculty.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;">Home</div></a>
                <div class="col-lg-5 col-md-5 col-sm-5 place-exam-section">
                  <h1 style="text-transform: uppercase; text-shadow:2px 2px 5px rgba(255, 0, 0, 0.555); font-size: 30px; padding-top:5px;"><?php echo $name," Profile"; ?></h1>
                </div>
                <a href="./logout.php" style="text-decoration:none;"><div style="color:white;font-size:25px; cursor:pointer;text-decoration:none;">Logout</div><a>
              </div>
            </div>
          </div>
          
<br>
    <div class="row" style=" margin: 10px auto; width: 90%;">
      <div class="col-12 mt-3 tabl">
        <h3 class="text-center text-white pt-3">Profile</h3><hr style="background-color: white">
        <img style="float:right; margin:20% 10%; border-radius: 50%;" src="./photos/<?php echo $image;?>" width="35%"; height="35%">
        <ul class="col-6 text-black" style="list-style:none; font-size:26px; background-color:white; border-radius:10px;font-weight:bold">
        <li class="pt-5">Name: <?php echo "<font style='color:red;'>$name</font>" ?></li>
        <li>Designation: <?php echo "<font style='color:red;'>$designation</font>" ?></li>
        <li>Total Experience: <?php echo "<font style='color:red;'>$experience</font>" ?></li>
        <li>Email: <?php echo "<font style='color:red;'>$email</font>" ?></li>
        <li>Salary: <?php echo "<font style='color:red;'>$salary</font>" ?></li>
        <li>College Registration ID: <?php echo "<font style='color:red;'>$register_id</font>" ?></li>
        <li>Gender: <?php echo "<font style='color:red;'>$gender</font>" ?></li>
        <li>Department: <?php echo "<font style='color:red;'>$department</font>" ?></li>
        <li>Mobile: <?php echo "<font style='color:red;'>$mobile</font>" ?></li>
        <li>Location: <?php echo "<font style='color:red;'>$location</font>" ?></li>

    
        </ul>
      </div>
    </div>


</body>

</html>