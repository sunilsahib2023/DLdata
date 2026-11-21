<h1>Following Data is updated or Save in  Data File </h1>
<?php


$d = $_POST['editeddata'];

echo $d;

$ff = fopen("maildata.txt", "w+") or die("Unable to open file!");
fwrite($ff,$d);

?>

<br/><br/>
<a href="">Message</a>
<br/><br/>
<a href="first.php">Edit Message File </a>