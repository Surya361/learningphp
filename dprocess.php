<?php
//echo "starting script";
include_once('connection.php');
include_once('dbconnection.php');
//echo "</br>";
$id = 100;
$query = "insert into userlist (username) values ('".$_POST['email']."')";
//echo $query;
$ret = mysql_query($query);
if(!$ret)
{
	echo "* username exists </br>";
	include('forms.php');
}
else
$query = "select uid from userlist where username='".$_POST['email']."'";
$u = mysql_query($query);
$res = mysql_fetch_row($u);

$query = "insert into auth values ('".$res[0]."','".$_POST['pass']."')";
$suce = mysql_query($query);

$query = "insert into userdetalis values ('".$res[0]."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['sex']."')";
$suce = mysql_query($query);
echo "sucessfully registered </br>";
echo "<a href=\"login.php\"> login </a>"

?>