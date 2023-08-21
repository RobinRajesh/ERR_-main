<?php

session_start();
// if (!$_SESSION["LoginAdmin"])
// {
//     header('location:../login/login.php');
// }
    require_once "connection.php";

// $server="localhost";
// $username="root";
// $password="";
// $database="erp_project";
//  $conn=mysqli_connect("localhost","root","","erp_project");

//  if ($conn) 
// {  
//    echo "Connection successfully";  
// }
//  else{  
//        echo "Error";  
//         }  
if (isset($_POST['submit']))
{
$fname = $_POST['name'];
$email = $_POST['eemail'];
$password = $_POST['ppassword'];



$sql = "INSERT INTO `user` (`user_id`,`name`, `email`, `password`) VALUES (NULL,'$fname', '$email', '$password');";


$run=mysqli_query($conn,$sql);
if ($run) 
{
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: login.php");
            }
            else{
                echo  "Results Has Not Been Submitted Successfully";
            }
 }//comment 1
?>
