<?php

$str = "go to restaurant"; 

function checkString($str) {
	if ((strpos($str, 'restaurant') !== false && strpos($str, 'book') === false) || (strpos($str, 'restaurant') === false && strpos($str, 'book') !== false)) { 
		return 'true';
	}
	return 'false';
}
echo checkString($str);
?>