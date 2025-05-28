<?php
session_start();
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIET Prayagraj</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
  <script src="jquery.js"></script>
  <style>
     #modal{
       
        width:35%; 
        border-radius: 5px;
        text-align: center;
            
            height: 50%;
            background-color: white;
            position: absolute;
            top:-50%;
            left: 50%;
            transform: translate(-50%,-50%);
            z-index: 100;
        }
        #hover h1{
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
        p{
            text-align: center;
            font-size: 20px;
            color:green;
            padding: 25px;
        }
        span{
            position: absolute;
            top:0;
            right:0;
            font-size: 25px;
            padding: 5px;
            border-radius: 50%;
            background-color: #da2222;
            border: 2px solid;
            color: black;
            cursor: pointer;
        }
        #container{
            width:100%;
            position: absolute;
            height: 100%;
            top:0px;
            left:0px;
            background-color: rgba(0,0,0,0.7);
            display: none;
            z-index: 100;
        }
  </style>
</head>
<body>
<div id="container">
  </div>
  <div id="modal">
  <h1>Login</h1>
        <form  action="#" method="POST" autocomplte="off">
        <div class="form">
            <input type="text" name="email" class="textfield" placeholder="Email ">
            <input type="text" name="password" class="textfield" placeholder="Password">
            <div class="forgetpassword">
                <a href="#" class="link" onclick="forgetpassword()">Forget Password ?</a>
            </div>
            <input type="submit" name="login" value="Login" class="btn">
            <div class="signup">New Member <a
             href="../register/register.php" class="link">SignUp Here</a></div>

        </div>
        </form>
        <span>X</span>
    </div>
    <?php
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['login']) and !empty($email) and !empty($password)){
    
    $query="select * from register where email='$email' and password='$password';";
    $data=mysqli_query($connect,$query);
    $total=mysqli_num_rows($data);
    //echo $total;
    if($total >= 1){
        $_SESSION['user_mail']=$email;
        
        header('location:../Final Year Project/mainhome.php');
        echo "<script>alert('Login Ok');</script>";

    }else{
        echo "<script>
        alert('Login Failed');
         </script>";
    
        
    }
}/*else{
    echo "<script>
    $('document').ready(function(){
    alert('Please fill all the fields');})
     </script>";
   
}*/
?>
    <div class="container-fluid">
        <div class="row">
            <div class="header">
                <nav>
                    <ul>
                    <li>
                    <div class="header-partition">
                    <div class="dropdown">
                      <button class="dropbtn vertical"><i class="fas fa-phone-square pr-1" style="color:white;font-size:14px"></i>Contact<i class="fas fa-angle-down" style="color:white;float:right;padding-top:3px"></i></button>
                      <div class="dropdown-content">
                        <a href="tel:559-6507232091">+91 9044052942</a>
                        <a href="tel:+91-8697499539">+91 8127100101</a>
                      </div>
                    </div>
                    </div>
                    </li>

                    <li>
                        <div class="header-partition">
                        <div class="dropdown">
                          <button class="dropbtn vertical"><i class="fas fa-at pr-1" style="color:white;font-size:14px"></i>Email<i class="fas fa-angle-down" style="color:white; float:right;padding-top:3px"></i></button>
                          <div class="dropdown-content">
                            <a href="mailto: mail@siet.in">SIET</a>
                          </div>
                        </div>
                        </div>
                    </li>

                    <li>
                        <div class="header-partition">
                        <div class="dropdown">
                          <button class="dropbtn vertical">Social Media<i class="fas fa-angle-down" style="color:white; float:right;padding-top:3px"></i></button>
                          <div class="dropdown-content">
                            <a href="https://www.facebook.com/ShambhunathGroupOfInstitutions/" target="_blank"><i class="fab fa-facebook" style="color:blue"></i></a>
                          </div>
                        </div>
                        </div>
                    </li>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pb-1" style="background-color:#eee;">

        <div class="row">
         <div class="col-12 col-sm-12">
            <img class="mt-2 col-sm-4 col-md-4 col-lg-2 img-responsive" style="float:left" src="img/logo.jfif" height="150px" width="100px" style="margin:5px 0px 0px 0px;">
      
            <h1 class="mt-4 offset-3  pt-1" style="text-transform: uppercase;padding-left:45px;text-align:center;">Shambhunath Institute Of Engineering and Technology</h1>
            <hr class="offset-3" style="background-color:black; width:64%; padding-left:30px;text-align:center;">
            <h4 class="offset-2 pb-3" style="text-transform: uppercase;padding-left: 6.5%;text-align:center;">Jhalwa, Prayagraj, Uttar Pradesh, Pin Code:211015</h4>
          </div>  
        </div>
    </div>

    <div class="container-fluid" style="background:#da2222">
        
            <div class="menu">
                <div class="row ml-lg-4">
                    <nav>
                        <ul>
                            <li>
                                <div class="menu-part col-3">
                                <div class="dropdown">
                                    <button class="dropbtn">Academics<i class="fas fa-sort-down" style="color:white; float:right;padding-right:3px"></i></button>
                                    <div class="dropdown-content">
                                      <a href="#" target="_blank">2025</a>
                                    </div>
                                  </div>
                                  </div>
                            </li>
                            <li>
                                <div class="menu-part col-3">
                                <div class="dropdown">
                                    <button class="dropbtn">Departments<i class="fas fa-sort-down" style="color:white; float:right;padding-right:3px"></i></button>
                                    <div class="dropdown-content">
                                      <a href="#">EC</a>
                                      <a href="#">CSE</a>
                                      <a href="#">EE</a>
                                      <a href="#">ME</a>
                                      <a href="#">CE</a>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li>
                                <div class="menu-part col-3">
                                <div class="dropdown">
                                    <button class="dropbtn">Admission<i class="fas fa-sort-down" style="color:white; float:right;padding-right:3px"></i></button>
                                    <div class="dropdown-content">
                                      <a href="../student portal/my profile/register.php" target="_blank">Admission <i class="fas fa-external-link-alt" style="color:black"></i></a>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li>
                                <div class="menu-part col-3">
                                <div class="dropdown">
                                    <button class="dropbtn">Facilities<i class="fas fa-sort-down" style="color:white; float:right;padding-right:3px"></i></button>
                                    <div class="dropdown-content">
                                      <a href="../LMS/index.php" target="_blank">Library</a>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li>
                                <div class="menu-part col-3">
                                <div class="dropdown">
                                    <button class="dropbtn">Placements<i class="fas fa-sort-down" style="color:white; float:right;padding-right:3px"></i></button>
                                    <div class="dropdown-content">
                                      <a href="../placement/index.html" target="_blank">2024</a>
                                
                                    </div>
                                </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
  
        <div class="container-fluid mt-4 mb-4">
          <div class="row">
            <div id="control" class="carousel slide col-12" data-pause="false" data-interval="4000" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block tales" src="img/pic3.webp"  alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block tales" src="img/pic2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block tales" src="img/pic3.webp" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block tales" src="img/pic4.jpg" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#control" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#control" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <div class="container-fluid mt-4">
          <div class="row">
              <div class="btnarea">
                  <div class="row mt-5">
                      <div class="area-btn mt-5 mb-4">
                        <a href="../admin panel/login.php" target="_blank"><button class="col-sm-4 col-md-6 col-lg-12" style="padding-top:15px; margin-left:150px"><img src="img/adminlogin.png" width="64px" height="64px" style="margin-right:20px">Admin Login</button></a>
                      </div>
                  </div>
                  <div class="row">
                      <div class="area-btn mt-5 mb-5">    
                        <a href="../student portal/my profile/login.php" target="_blank"><button class="col-sm-4 col-md-6 col-lg-12" style="padding-top:15px; margin-left:150px"><img src="img/studlogin.png" width="64px" height="64px" style="margin-right:20px">Student Login</button></a>
                      </div>
                  </div>
                  <div class="row mb-5">
                      <div class="area-btn mt-4">
                        <a href="../faculty portal/my profile/login.php" target="_blank"><button class="col-sm-4 col-md-6 col-lg-12" style="padding-top:15px; margin-left:150px"><img src="img/faclogin.png" width="64px" height="64px" style="margin-right:20px">Faculty Login</button></a>
                      </div>
                  </div>
              </div>
              <div class="about pb-2">
                <div class="stud-head">
                  <div class="row">
                      <div class="col-12">
                  <h2><strong>Notice Board</strong></h2>
                  <hr style="background-color: white;width:80%;border:1px dashed black">
                      </div>
                    </div>
                    <marquee direction="up" scrollamount="3">
                      <div class="container">
                        <div class="row mb-2">
                            <div class="col-12 tble">
                                <table class="col-10 offset-1 mt-2 table-responsive">
                                <tr style="border:2px solid brown;">
                                    <td style="width:335px">1ST SESSIONAL SCHEDULE FOR 2ND AND 3RS YEAR (EVEN SEM 24-25)</td>
                                    <td>20, Mar 2025</td>
                                </tr>
                                <tr style="border:2px solid brown;">
                                  <td>SIET MBA 1ST SESSIONAL SCHEDULE FOR 2ND YEAR</td>
                                  <td>20, Mar 2025</td>
                                </tr>
                                <tr style="border:2px solid brown;">
                                  <td>1ST YEAR PRACTICAL EXAM SCHEDULE ODD SEM</td>
                                  <td>19, Mar 2025</td>
                                </tr>
                                <tr style="border:2px solid brown;">
                                  <td>2ND YEAR PRACTICAL EXAM SCHEDULE ODD SEM</td>
                                  <td>19, Mar 2025</td>
                                </tr>
                                <tr style="border:2px solid brown;">
                                  <td>SIM MBA 1ST SESSIONAL SCHEDULE FOR 2ND YEAR</td>
                                  <td>20, Mar 2025</td>
                                </tr>
                        
                                <tr style="border:2px solid brown;">
                                  <td>EC 2ND YEAR PRACTICAL EXAM SCHEDULE ODD SEM</td>
                                  <td>19, Mar 2025</td>
                                </tr>
                               
                                </table>
                            </div>
                        </div>
                      </div>
                    </marquee>
                  </div>
                
                </div>
                </div>
              </div>

              <div class="container-fluid" style="margin-top:32px">
                <div class="row">
                  <div class="univ-news col-12 pt-4">
                    <h2 style="text-align:center"><strong>AKTU University News</strong></h2>
                <div class="row mt-3 pt-3">
                  <!-- <div class="column" style="float:left;margin-top:30px"> -->
                    <div class="card bg-dark" style="margin-left:100px">
                      <img src="img/adminlogin.png" height="332px" width="300px" class="card-img" alt="...">
                      <div class="card-img-overlay">
                        <br><br><br><br><br><br><br><br><br><h3 class="card-title" style="color:white"><strong>AKTU ERP:</strong></h3>
                        <p class="card-text" style="color:white;font-size:20px"><strong> <a href="https://erp.aktu.ac.in/login.aspx">https://erp.aktu.ac.in/login.aspx</a> </strong></p>
                        
                      </div>
                    </div>
                    <div class="card" style="width:23rem;margin-left:20px">
                      <img src="img/AKTU2.jpeg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-text" style="color:brown"><strong>Admissions 2024-25</strong></h5>
                        <p class="card-text"><strong>URL: <a href="https://uptac.admissions.nic.in/">https://uptac.admissions.nic.in/</a> </strong></p>
                      </div>
                    </div>

                    <div class="card" style="width:23rem;margin-left:20px">
                      <img src="img/phd.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-text" style="color:brown"><strong>PhD Admissions 2024-25</strong></h5>
                        <p class="card-text"><strong> URL:<a href="https://aktuadm.samarth.edu.in/phd/index.php">https://aktuadm.samarth.edu.in/phd/index.php</a> </strong></p>
                      </div>
                    </div>
                  </div>

                  
                    

                  <div class="row mt-5 mb-5 justify-content-center">
                    <button class="news-btn col-4"><a href="">More University News</a></button>
                  </div>

                </div>
                </div>
              </div>

              <div class="container-fluid mt-2" style="background:white">
                <div class="row pt-4">
                  <div class="abtstan col-12 pt-4">
                    <h1><strong>About SIET</strong></h1>
                    <h5 style="padding-top:10px">A place for learning, discovery and innovation.</h5>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="stanopen">
                    <h5>Placements</h5>
                    <h2><strong>9,000</strong></h2>
                  </div>
                  <div class="stanstud">
                    <h5>Happy Students</h5>
                    <h2><strong>12,000</strong></h2>
                  </div>
                  <div class="stanfac">
                    <h5>Experienced Faculty</h5>
                    <h2><strong>400</strong></h2>
                  </div>
                </div>
                <div class="row mt-5 mb-4 justify-content-center">
                  <button class="news-btn col-4"><a href="">More About SIET</a></button>
                </div>
                <div class="row mt-5 ">
                  <img src="img/pic3.webp" width="100%">
                </div>
              </div>

              <div class="container-fluid" style="background-color:rgb(33, 31, 31);">
                <div class="row col-12">
                  <div class="footer-partition mt-5 ml-3">
                    <!-- <img src="img/Stanbw.png" height="100px" width="100px" style="margin-left:auto;margin-right:auto;display:block"> -->
                    <h4 style="text-transform:uppercase;padding-top:6px;text-align:center;">Uttan Shambhunath Institutions</h4>
                  </div>
                  <div class="footer-partition mt-5 ml-2">
                    <h6 style="padding-left:39px;padding-top:10px">Uttan Shambhunath Institutions</h6>
                    <ul>
                      <li>Jhalwa, Prayagraj</li>
                      <li>Uttar Pradesh,</li>
                      <li>Pin Code: 211015</li>
                    </ul>
                  </div>
                  <div class="footer-partition mt-5 ml-2">
                    <ul style="text-decoration:underline;line-height: 40px;cursor:pointer;">
                      <li>Emergency Info</li>
                      <li>Job Opportunities</li>            
                      <li>Privacy</li>
                    </ul>
                  </div>
                  <div class="footer-partition mt-5 ml-2">
                    <ul style="text-decoration:underline;line-height: 40px;cursor:pointer;">
                      <li>Campus Directory</li>
                      <li>Contact Us</li>
                      <li>Maps & Directions</li>
                      <li>A-Z Listing</li>
                    </ul>
                  </div>
                </div>

                <div class="row justify-content-end" style="margin-right:172px">
                  <a href="https://www.facebook.com/ShambhunathGroupOfInstitutions/"><i class="fa-brands fa-facebook-f" style="margin-left:15px"></i></a>
                  <a href="https://www.instagram.com/siet_162/"><i class="fa-brands fa-instagram" style="margin-left:15px"></i></a>       
                  <i class="fa-brands fa-linkedin-in" style="margin-left:15px"></i>
                  <i class="fa-brands fa-twitter" style="margin-left:15px"></i>
                  <i class="fa-brands fa-youtube" style="margin-left:15px"></i>
                </div>

                <hr style=" background-color:black">
                <div class="row justify-content-center text-white">
                  <p style="font-weight:bolder"><i class="fa-sharp fa-regular fa-copyright" style="font-size:20px;"></i> 2025 SIET. All rights reserved</p>
                </div>
              </div>

</body>

</html>