<?php
	$conn = mysql_select_db('learning',$con);
	if(!$conn == true)
	echo mysql_error();
?>