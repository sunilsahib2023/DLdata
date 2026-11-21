
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<frameset cols="200,*">
<frame src="sidebar.php" />
<frameset rows="*,200">
<frame src="messages.php" />
<frame src="newmessage.php" />
</frameset>
</frameset>
</html>


<?php

session_start();
//echo $_POST['username']
$_SESSION['username']=$_POST['username']


?>