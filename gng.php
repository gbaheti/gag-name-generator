<?php 
	function rand_v(){
		$vowels = array('a', 'e', 'i', 'o', 'u');
		return $vowels[array_rand($vowels)];
	}
	$str = str_split(htmlspecialchars($_POST['name']));
	$string = '';
	foreach ($str as $key) {
		$string .= preg_replace('/[aeiou]/', rand_v(), $key);
	}
	echo $string;
?>