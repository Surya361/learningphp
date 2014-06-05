<?php
	function square($a)
	{
		return $a*$a;
	}
	$b = square(3);
	echo "$b";

	function swap($c,$d)
	{
		$temp = $c;
		$c = $$d;
		$d = $temp;
	}
	$f = 10;
	$g = 20;
	swap($f,$g);
	echo "$f";
	echo "$g";
?>
