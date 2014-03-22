<?php 
	function rand_v(){
		$vowels = array('a', 'e', 'i', 'o', 'u');
		return $vowels[array_rand($vowels)];
	}
	$str = htmlspecialchars($_POST['name']);
	if (!preg_match('/a-zA-Z/', $str)) {
		echo 'write ur name noob';
		return;
	}
	$str = str_split($str);

	$string = '';
	foreach ($str as $key) {
		$string .= preg_replace('/[aeiou]/', rand_v(), $key);
	}
	echo $string;
?>