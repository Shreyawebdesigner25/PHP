<?php
$username = 'shreya';
$password = 12345;

if ($username == 'shreya' AND $password == 12345) {
	echo "condition true <br/>";
}elseif ($username == 'shreya' OR $password == 4567) {
    echo "condition true <br/>";
}elseif ($username != 'nidhi') {
	echo "username is shreya <br/>";
}else
    echo "undefined";
?>