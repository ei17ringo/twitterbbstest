<?php
	
	// 整数(int型)	
	$number = 100;

	if ($number == 1) {
		$greeding = 'こんにちは';
	}else{
		$greeding = 'Hello,World!';
	}

	$number = 2;

	// 文字列型(string型)
	echo $greeding;
	echo '<br>';

	// 少数(float型)
	$float = 1.25;

	// 論理値(boolean型 true/false)
	$bool = false;

	// 配列
	$array = array(1,2,3,4,5);

	// 連想配列
	$array2 = array('first' => 1, 'second' => 2);

	var_dump($number);
	echo '<br>';
	var_dump($greeding);
	echo '<br>';
	var_dump($float);
	echo '<br>';
	var_dump($bool);
	echo '<br>';
	var_dump($array);
	echo '<br>';
	var_dump($array2);
?>
<br>
おはよう