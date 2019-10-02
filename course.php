<?php
    include "header.php";
    include "include/config.php"
?>
<!DOCTYPE html>
<html>
<head>
<title>Course</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $(".list").click(function(e) {
         e.preventDefault();
        
        $("#frame").attr("src", $(this).attr("href"));
     });
  
});
</script>
<link href="css/course.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>videos</h1>
<div>
<!-- src="https://www.youtube.com/embed/0kfLTq57_Y0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen -->
<iframe id="frame" width="560" height="315"  ></iframe>
<button name='sub' value='subscribe' class="sub">Subscribe</button>

</div>

<div>
<h2>list</h2>

<table>
<?php
$fetch="SELECT * FROM course_list ;";
$result=mysqli_query($conn,$fetch);
$rowcheck=mysqli_num_rows($result);



 if($rowcheck >1){

    while($rows = mysqli_fetch_assoc($result))
     {
         echo '<a class="list" href="'.$rows['url'].'" target="frame"> <tr  id="'.$rows['id'].'">'.$rows['title'].'</tr></a><br><br>';
         
         
     }
 }
?>
</table>

</div>
</body>
</html>
