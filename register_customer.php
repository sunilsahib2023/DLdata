<?php
$c = mysql_connect("localhost","root","");
  if(!$c)
       {
            die("<h1>Could not Connect with Server</h1>");          

         }
         else
            {
              echo "<h1>Connected..</h1>";

              }


mysql_select_db("myshope");

// Creating new Id


$sq = "SELECT * FROM register";

$rs = mysql_query($sq,$c);

$num_rows = mysql_num_rows($rs);
//$tid = rand(101, 1000);
$tid = 101+$num_rows;
//echo "New Id = ".$tid;





$sq = "INSERT INTO register(custid,custaddress,custphone,custemail,custcity,custipin,custpass,custname) VALUES ('$tid','$_POST[address]','$_POST[phone]','$_POST[mail]','$_POST[city]','$_POST[pin]','$_POST[password]','$_POST[name]')";


$eq = mysql_query($sq,$c);


if($eq)
   {
        echo "<h1>New Cutomer Record appended </h1>";
    }
  else
    {
           echo "<h1>Could not Register</h1>";

     }
    
$sq = "select * from register";

$rs = mysql_query($sq,$c);

echo "<b>Following Record Are There in Database </b><br/>";


  while($i = mysql_fetch_array($rs))
         {
              echo "<pre>customer Id \t\t".$i['custid']."</br>";
              echo "customer_Name \t\t".$i['custname']."</br>";


echo "Customer Address \t\t".$i['custaddress']."<br/>";

echo "Customer Phone \t\t".$i['custphone']."</br>";

echo " Customer Mail \t\t".$i['custemail']."</br>";

echo "Customer city\t\t".$i['custcity']."</br/>";

echo "Customer Pin Code \t\t".$i['custipin']."</br/>";



          }



mysql_close($c);

echo "<br><a href='register_customer.html'>Login Page</a>";
?>






<!doctype HTML>
<html>

<body style="text-left:center;background:pink">
<h1>Registering Customer</h1>



</body>
</html>
