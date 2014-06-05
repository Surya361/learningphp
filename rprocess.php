<?php
if($_POST[pass] == $_POST[rpass])
{
	echo "Name: " ;
	echo $_POST['firstname']; echo" ";echo $_POST['lastname'];
	echo "</br>";
	echo "sex: ".$_POST['sex']."</br>";
	echo "email: ". $_POST['email']."</br>";
}
else 
{
	$form =
"<html>
<head>
	<title>registration form</title>
</head>
<body>
<form action = \"fprocess.php\" method = \"POST\">
<label for=\"fname\"> firstname:  </label>
<input type=\"text\" name=\"firstname\"></input>
</br>
<label for=\"lname\"> lastname: </label>
<input type=\"text\" name=\"lastname\"></input>
</br>
<input type=\"radio\" name=\"sex\" value=\"male\">male</input>
<input type=\"radio\" name=\"sex\" value=\"female\">female</input>
</br>
<label for=\"email\"> email:  </label>
<input type=\"text\" name=\"email\"></input>
</br>
<label for=\"password\"> password:  </label>
<input type=\"password\" name=\"pass\"></input>
</br>
<label for=\"rpasswd\"> retype password:  </label>
<input type=\"password\" name=\"rpass\"></input>
 passwords dosent match
</br>
<input type=\"submit\" value = \"getstarted\"> </input>
<input type=\"reset\" value = \"wipe\"></input>
</form>
</body>
</html>";
echo $form;
}
?>