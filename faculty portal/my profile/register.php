<?php include "connection.php";?>
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
              <div class="col-12 exam-section mt-2">
                <div class="col-lg-12 col-md-12 col-sm-12 place-exam-section">
                  <h1 style="text-transform: uppercase; text-shadow:2px 2px 5px rgba(255, 0, 0, 0.555)">Faculty Registration</h1>
                </div>
              </div>
            </div>
          </div>
<br>
    <div class="row" style="width: 90%; margin: 10px auto;">
      <div class="col-12 mt-3 tabl">
        <form action="#" method="POST" enctype="multipart/form-data">
        <h3 class="text-center text-white pt-3">Registration</h3><hr style="background-color: white">
        <ul class="col-12 text-black" style="list-style:none; font-size:26px; background-color:white; border-radius:10px;font-weight:bold;">
        <li class="pt-5">Name: <input type="text" placeholder="Enter Name" name="name" style="width:80%; border:none; outline:none; background-color:#eee;"></li>
        <li>Upload Image: <input type="file" placeholder="Upload Image" name="photo" style="width:80%; border:none; outline:none; background-color:#eee;"></li>
        <li>Designation: <input type="text" placeholder="Enter Designation" name="designation" style="width:80%; border:none; outline:none; background-color:#eee;"></li>
        <li>Total Experience: <input type="text" placeholder="Enter Experience" name="experience" style="width:80%; border:none; outline:none; background-color:#eee;"></li>
        <li>Email: <input type="email" placeholder="Enter Email" name="email" style="width:90%; border:none; outline:none; background-color:#eee;"></li>
        <li>Password <input type="text" placeholder="Enter Password" name="password" style="width:80%; border:none; outline:none; background-color:#eee;"></li>
        <li>Gender: <select name="gender" style="width:80%; border:none; outline:none; background-color:#eee;">
            <option value="Not Selected">Select Your Gender</option><option value="male">Male</option><option value="female">Female</option></select></li>
        <li>Salary: <input type="text" placeholder="Enter Salary" name="salary" style="width:90%; border:none; outline:none; background-color:#eee;"></li>
        
        <li>Gender: <input type="text" placeholder="Enter Gender" name="gender" style="width:70%; border:none; outline:none; background-color:#eee;"></li>
        <li>Department: <input type="text" placeholder="Enter Department" name="department" style="width:70%; border:none; outline:none; background-color:#eee;"></li>
        <li>Mobile: <input type="number" maxlength="10" placeholder="Enter Mobile Number" name="mobile" style="width:70%; border:none; outline:none; background-color:#eee;"></li>
        <li>Address: <input type="text" placeholder="Enter Address" name="location" style="width:70%; border:none; outline:none; background-color:#eee;"></li>
        <li><input type="submit" value="Register" name="submit" style="padding: 10px; border:none; background-color:red; color:white;border-radius: 20px; width:20%;"></li>
        </ul></form>
      </div>
    </div>

</body>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$designation=$_POST['designation'];
$experience=$_POST['experience'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$salary=$_POST['salary'];
$register_id=$_POST['register_id'];
$password=$_POST['password'];
$gender=$row['gender'];
$department=$row['department'];
$mobile=$row['mobile'];
$location=$row['location'];
$image= $_FILES["photo"]["name"];
$tmp_name= $_FILES["photo"]["tmp_name"];
move_uploaded_file($tmp_name,"./photos/$image");
if(!empty($name) and !empty($image) and !empty($designation) and !empty($experience) and !empty($email) and !empty($gender) and !empty($salary) and !empty($register_id) and !empty($password)){
$query="insert into faculty_details(name,gender,designation,experience,email,salary,register_id,image,password,gender,department,mobile,location) values('$name','$gender','$designation','$experience','$email','$salary','$register_id','$image','$password','$gender','$department','$mobile','$location')";
$result=mysqli_query($connect,$query);
if($result){
    echo "<script>alert('Succcessfully Register');</script>";
    $a="select * from faculty_details where email='$email' and password='$password'";
    $b=mysqli_query($connect,$a);
    $res=mysqli_fetch_assoc($b);
    $id=$res['id'];
    echo $id;
   $con=mysqli_connect("localhost","root","","faculty_give_attendance");
   $con2=mysqli_connect("localhost","root","","faculty_upload_paper");
    $query1="create table attendance_by_facultyid_".$id."(id int not null AUTO_INCREMENT,name varchar(50),roll_no int,primary key(id))";
    $res1=mysqli_query($con,$query1);
    $query2="create table attendance_record_by_facultyid_".$id."(id int not null AUTO_INCREMENT,name varchar(50),roll_no int,status varchar(50),date date,primary key(id))";
    $res2=mysqli_query($con,$query2);
    $con1=mysqli_connect("localhost","root","","faculty_upload_paper");
    $query3="create table upload_paper_by_faculty_id_".$id."(id int not null AUTO_INCREMENT,paper varchar(255),semester varchar(40),primary key(id))";
    $res3=mysqli_query($con2,$query3);
    echo "<script>alert('Succcessfully Register');</script>";
    echo "<script>window.location.href='./login.php';</script>";
}else{
    echo "<script>alert('Please fill all the input boxes');</script>";
}
}
?>
</html>