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
           
                            <input type="text" name="username" placeholder="username">
                        
                            <input type="password" name="password" placeholder="password">

                            <button type="submit" name="login">Login</button>

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
				<li class="active"><a href="#">Home</a></li>
				<li><a href="Services.html">Services</a></li>
				<li><a href="Gallery.html">Gallery</a></li>
				<li><a href="About.html">About</a></li>
				<li><a href="Contact.html">Contact</a></li>
			</ul>
			</nav>
        </div>
</header>
</body>
</html>        