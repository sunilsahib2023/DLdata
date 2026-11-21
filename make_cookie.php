<?php



if(isset($_COOKIE['user1']))
    {
      
$u = $_COOKIE['user1'];

echo "<h1 style='color:green'>$u..is Valid user of This site....</h1>";

     }
     else
     {
setcookie("user1","Ravi",time()+3600,"/data");
setcookie("pass1","abc@123",time()+3600,"/data");
echo "<h1>Cookie is setted successfull</h1>";

       
     }




?>
