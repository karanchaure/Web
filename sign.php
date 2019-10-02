
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
           <h1>Signup</h1>
           <form action="include/db.php" method="post">
           <input class="sign" type="text" name="name" placeholder="name">
           <input  class="sign" type="email" name="email" placeholder="email">
           <input class="sign" type="text" name="username" placeholder="username">
         <input class="sign" type="password" name="password" placeholder="password">
    
    
        <input class="sign" type="password" name="password_r" placeholder="password_rep">
           
    <button class="sub" type="submit" name="signup">Signup</button></form>
       </section>
   </div>
</body>
</html>

