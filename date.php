<?php
echo '<meta http-equiv="refresh" content="5" />';

date_default_timezone_set("Asia/kolkata");
echo "<h1>".date('D d/m/Y h:i:sa')."</h1>";

$i = Date('s');
//echo "<h1>$i";

$pic = "images/b5.jpg";
echo "<br/>";


 switch($i)
          {
          case 5:
          $pic = "images/b1.jpg";
          break;
     

       case 10:
          $pic = "images/b2.jpg";
          break;


           case 15:
          $pic = "images/b3.jpg";
          break;


          case20:
          $pic = "images/b4.jpg";
          break;
          case 25:
          $pic = "images/b5.jpg";
          break;



         case 30:
          $pic = "images/b6.jpg";
          break;


         
         case 35:
          $pic = "images/b7.jpg";
          break;


           
               
         case 40:
          $pic = "images/b8.jpg";
          break;


            
         case 45:
          $pic = "images/b9.jpg";
          break;



         case 50:
          $pic = "images/b4.jpg";
          break;


         
         case 55:
          $pic = "images/b7.jpg";
          break;
        default:
           

           }

echo "<img src='$pic' width='1200' height='500' style='transition:2s;transform:rotate(360 deg);box-shadow:10px 10px 10px gray'>";



?>
