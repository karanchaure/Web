
        <?php
  include "header.php";
  
    ?>
<html>
<head>
<title>Sign up</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
   <div class="main">
       <section class="section">
           <h1>Signup</h1><br>
           <form action="include/db.php" method="post">
           Name:<br><input class="sign" type="text" name="name" placeholder="name"><br><br>
           Email:<br><input  class="sign" type="email" name="email" placeholder="email"><br><br>
           Username:<br><input class="sign" type="text" name="username" placeholder="username"><br><br>
           Password:<br><input class="sign" type="password" name="password" placeholder="password"><br><br>
    
    
        Re-enter Password:<br><input class="sign" type="password" name="password_r" placeholder="password_rep"><br><br>
           
    <button class="sub" type="submit" name="signup">Signup</button></form>
       </section>
   </div>
</body>
</html>

