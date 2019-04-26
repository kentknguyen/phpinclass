<?php

$a = $_POST;


$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);

print_r($d);

$d = json_encode($d);

file_put_contents('data.json', $d);

header('location:../profile.php');
?>