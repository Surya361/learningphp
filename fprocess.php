<?php
if($_POST['pass'] == $_POST['rpass'])
{
	$file = "responce";
	$fp = fopen($file,"a+");
	if($fp == NULL)
	{
		echo "cannot open file";
	}
	else
	{
		$a = getdate();
		$content = $_POST['firstname']." ".$_POST['latname']." ".$_POST['sex']." ".$_POST['email']." ".$_POST['pass']." ".$a['mday']."/".$a['mon']."/".$a['year']." ".$a['hours'].":".$a['minutes'].":".$a['seconds']."\n" ;
		//ho $content ;
		fwrite($fp,$content);
		echo "Thank you </br>";
		echo "responce recorded";
		fclose($fp);
	}	
}
else
{
	include('forms.php');
	echo " * passwords dosent match"." </br>";
	

}	
?>