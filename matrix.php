<?php
	$mat1 = array(
		array(1,2,3),
		array(4,5,6),
		array(7,8,9)
		);
	$mat2 = array(
		array(2,3,4),
		array(5,6,7),
		array(8,9,10)
		);
	$res = array(
		array(),
		array(),
		array());
	for($i =0;$i < 3;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				for($k=0;$k<3;$k++)
				{
					$sum = $sum + ($mat1[$i][$k] * $mat2[$k][$j]);
				}
				$res[$i][$j] = $sum;
				$sum = 0;
				echo $res[$i][$j];
				echo "</br>";

			}

		}
?>