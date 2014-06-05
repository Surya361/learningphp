<?php
echo "test0";
class Bike
{
	var $name = "default bike";
	var $eng_hp = 100;
	echo "test1";
	public function name($a)
	{
		this->$name = $a;
	}
	public function hp($b)
	{
		this->$eng_hp = $b ;
	}
	public function info()
	{
		echo this->$name."</br>";
		echo this->$eng_hp."</br>";
	}
	function __construct($text)
	{
		this->$name = $text;
	}
	echo "test2";
}
echo "test3";
$hero = new Bike("hero");
echo "test4";
$hero->hp(220);
echo "test 5";
$hero->info();
?>