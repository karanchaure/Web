<?php
session_start();
if (isset ($_POST['login'])){
 include 'config.php';
 $username=mysqli_real_escape_string($conn,$_POST['username']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
//empty check
if (empty($username) || empty($password)){
    header ("Location: ../index.php?error=empty");
    exit();
}
else{
    $sql="SELECT * FROM user WHERE username='$username';";
    $result=mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck <1){
        header ("Location: ../index.php?error=nodata");
        exit();
    }
    else{
        if($row=mysqli_fetch_assoc($result))
        {
            if($row['password'] != $password ){
               
                 header ("Location: ../index.php?login=unsuccess");
                 exit();
            }
            else{
                //log in user$
                echo "wow";
                $_SESSION['uid']=$row['id'];
                $_SESSION['uname']=$row['name'];
                header ("Location: ../index.php?login=success");
                exit();
            }
        }

    }
}
}

else{
    header ("Location: ../index.php");
    exit();
}