


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="2" />
<title>Untitled Document</title>
</head>

<body>
<?php
//this is where the the messages from the server will go!

//conect to db

$link = mysql_connect('localhost', 'root', '');
if(!$link)
{
die('Could not connect:'.mysql_error());	
}else
{
//echo 'were good';	
}

mysql_select_db('IM');


$query = "SELECT * FROM messages";


if($result = mysql_query($query)or die(mysql_error())){

	while($row = mysql_fetch_row($result)){
		echo $row['3'].' says: '.$row['1'].'<br>';
	}
	
}

mysql_close($link);




?>
</body>
</html>