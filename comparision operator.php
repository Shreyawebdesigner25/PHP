<?php

$a = 40;
$b = 70;

if ($a == $b) {
	echo "both strings are equal";
}elseif ($a >= $b) {
	echo "a is greater than b <br/>";
}elseif ($a <= $b) {
	echo "b is greater than a";
}elseif ($a < $b) {
	echo "a is less than b";
}elseif ($a != $b) {
	echo "they are not equal";
}else
    echo "undefined <br/>";
?>