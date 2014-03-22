<?php 
	function rand_v(){
		$vowels = array('a', 'e', 'i', 'o', 'u');
		return $vowels[array_rand($vowels)];
	}
	$str = htmlspecialchars($_POST['name']);
	if (!preg_match('/[a-zA-Z]/', $str)) {
		echo 'write ur name noob';
		return;
	}
	$pdo = new PDO("mysql:host=localhost; dbname=gags", 'root', 'pass');

	$str_new = str_split($str);
	$string = '';
	foreach ($str_new as $key) {
		$string .= preg_replace('/[aeiou]/', rand_v(), $key);
	}
	echo $string;
	$query = $pdo->prepare("INSERT INTO `gags`.`gnames` (`id`, `name`, `gname`) VALUES (NULL, ?, ?);");
	$query->execute(array($str, $string));
?>