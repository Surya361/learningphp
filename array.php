<?php
	$arry=array(10,20,30,40);
	$b = count($arry);
	echo $arry[$b-1];
	$arry[] = 50;
	$b = count($arry);
	echo $arry[$b-1];
	echo array_search(20,$arry);
	echo in_array(50,$arry);
?>
