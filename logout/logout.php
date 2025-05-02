//login - session start
//logout = sesson destroy
<?php
session_start();
session_unset();
header('location:http://localhost/User%20Login%20and%20Logout%20System%20using%20Session/login.php');
?>