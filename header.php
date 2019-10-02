<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Web Site</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
	<header>
		<div class="main">
            <div class="log">
                <?php
                    if (isset($_SESSION['uid'])){
                        $s=$_SESSION['uname'];
                        echo '<p>Welcome </p>'.$s.' <form action="include/logout.php" method="POST">
                            
                            <button name="logout" type="submit">Logout</button> 
                            </form>';
                        }
                    else{
                        echo '<form action="include/login.php" method="POST">
           
                            <input class="log1" type="text" name="username" placeholder="username">
                        
                            <input class="log1" type="password" name="password" placeholder="password">

                            <button class="log2" type="submit" name="login">Login</button>

                            <a href="sign.php">Signup</a>

                            </form>';
                        }
                ?>
            </div>
			<div class="aks">
				<img src="aks.png">
			</div>
				<nav>
				<ul>
				<li class="a"><a href="index.php">Home</a></li>
				<li class="b"><a href="course.php">Courses</a></li>
				<li class="c"><a href="Gallery.html">Gallery</a></li>
				<li class="d"><a href="About.html">About</a></li>
				<li class="e"><a href="Contact.html">Contact</a></li>
			</ul>
			</nav>
        </div>
</header>
</body>
</html>        