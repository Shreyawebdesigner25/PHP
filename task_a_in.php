<?php

include "db_con.php";


$u = $_POST['a'];
$v = $_POST['b'];
$w = $_POST['c'];
$x = $_POST['d'];
$y = $_POST['e'];
$z = $_POST['f'];



echo $data = "insert into taska(name,city,phone,email,address,college)value('$u','$v','$w','$x','$y','$z')";

mysqli_query($con,$data);

?>