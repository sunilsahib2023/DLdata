<?php
session_start();
echo "<h1>Creating Site Counter ....</h1>";
$c=0;
$f;

$counterfile="cf.txt";
echo "<h1>Visit count :</h1>";
  if(!file_exists($counterfile))
	{
	 echo "<title>Creating file </title>";
	$f = fopen($counterfile,"w");
	fwrite($f,"0");
	fclose($f);
	exit();
	}

$f = fopen($counterfile,"r");
$cn =  fread($f, filesize($counterfile));


if(!isset($_SESSION["is_user_visiting_not_refreshing"]))
   {	
	$_SESSION["is_user_visiting_not_refreshing"]="yes";
	$cn++;
	$f = fopen($counterfile,"w");
	fwrite($f,$cn);
	fclose($f);

  }	
echo "<h1>c = $cn;</h1>";




?>