<?php

$conn=mysql_connect("localhost","localuser","mobit9gf7*uyu%^") or die("Connection Error");
$rs = mysql_select_db("myapp1",$conn) or die("Database not Found");

/*$conn=mysql_connect("localhost","root","") or die("Connection Error");
$rs = mysql_select_db("myapp1",$conn) or die("Database not Found");*/
if($rs)
{
	echo 'maiiltna';
	exit;
}
else
{
	echo 'npot';
	exit;
}

?>