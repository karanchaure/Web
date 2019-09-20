<?php
  include "header.php";
  
    ?>
<html>
<body>
   <div class="main">
       <section class="section">
           <h1>Signup</h1>
           <form action="include/db.php" method="post">
           <input type="text" name="name" placeholder="name">
           <input type="email" name="email" placeholder="email">
           <input type="text" name="username" placeholder="username">
         <input type="password" name="password" placeholder="password">
    
        
    
        <input type="password" name="password_r" placeholder="password_rep">
           
    <button type="submit" name="signup">Signup</button></form>
       </section>
   </div>
</body>
</html>

