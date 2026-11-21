<?php
session_start();
if(isset($_POST['message']))
{
$link = mysql_connect('localhost', 'root', '');
if(!$link)
{
die('Could not connect:'.mysql_error());	
}else
{
//echo 'were good';	
}

mysql_select_db('IM');

$message = mysql_real_escape_string($_POST['message']);
$username = mysql_real_escape_string($_SESSION['username']);

$sql = "INSERT INTO messages(message, username)
VALUES('$message', '$username')";
$result = mysql_query($sql);
mysql_close($link);

}
echo'<form action="newmessage.php" method="post">';
echo '<input type="text" name="message">';
echo '<input type="submit" name="Send">';
echo'</form>';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>