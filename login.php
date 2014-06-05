<?php
$form =
"<html>
	<head>
		<title>
		teja login
		</title>
	</head>
	<body>
	<form action=\"loginauthenticator.php\" method='POST'>
	<label for=\"username\">username or email</label>
	<input type=\"text\" name=\"uname\"></input>
	<label for=\"pass\">password</label>
	<input type=\"password\" name=\"pass\"></input>
	</br>
	<input type=\"submit\" value=\"login\"> </input>
	</form>
	</body>
</html>";
echo $form;

echo "<a href=\"forms.php\">register</a>";
?>