<?php
include "db_con.php";


$u = $_POST['a'];
$v = $_POST['b'];
$w = $_POST['c'];
// echo $u,$p;


$data = "insert into task(name,email,city)value('$u','$v','$w')";

mysqli_query($con,$data);
?>