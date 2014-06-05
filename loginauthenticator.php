<?php

include_once('connection.php');
include_once('dbconnection.php');
$query = "select uid from userlist where username='".$_POST['uname']."'";

$res = mysql_query($query);
if($uid = mysql_fetch_row($res))
{
	$query2 = "select passwd from auth where uid = '".$uid[0]."'";
	$ress = mysql_query($query2);
	$pass = mysql_fetch_row($ress);
	if($pass[0] == $_POST['pass'])
	{
		echo "logged in";
	}
	else
	{
		echo "*worng username or password </br>";
		include('login.php');
	}
}
else
{
	echo "usename dose't exists";
	include('login.php');
}
?>