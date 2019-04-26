<?php

print_r($_POST);

echo '<br>';

print_r($_FILES);

echo '<br>';

echo $_POST['name'];

$n = $_POST['name'];

$e = $_POST['email'];

$u = $_POST['user'];

$p = $_POST['pw'];

mkdir('users/'.$u);

$t = $_FILES['photo']['tmp_name'];

$i = 'users/'.$u.'/'.$_FILES['photo']['name'];

move_uploaded_file($t, $i);

$cnt = mysqli_connect('localhost','root','','fssa');

$qry = "insert into uregs19 (name, eml, user, pw) values ('$n', '$e', '$u', '$p', '$i');";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

?>