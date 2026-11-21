<?php
$f = fopen("maildata.txt","r+") or die("cannot open a file");

$m = fread($f,filesize("maildata.txt"));


fclose($f);
?>

<html>
<body>
<h1>Edit The Message Data And Save it Again (admin only)</h1>

<form action="savemessage.php" method="post">

<textarea name="editeddata" id="editdata"rows="10" cols="40">
<?php echo $m ?>

</textarea><br/><br/>
<input type="submit" value="Save">

</form>


</body>


</html>
