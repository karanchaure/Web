<?php
session_start();
if(isset($_POST['signup'])){
    include_once  "config.php";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $usernam=$_POST['username'];
    $pwd=$_POST['password'];
    $pwd_r=$_POST['password_r'];
 


    $sql = "INSERT INTO user(name,email,username,password) VALUES('$name','$email','$usernam','$pwd')";
    mysqli_query($conn,$sql);

   header("Location: ../index.php?signip=success");
    
}
