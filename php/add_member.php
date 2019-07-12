<?php
include "conDB.php";

//$_POST['user'] --> name = "user" (html)
$user = $_POST['user'];
$pass = $_POST['pass'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$fav_a = $_POST['fav_a'];
$fav_b = $_POST['fav_b'];


$fav = $fav_a . "," . $fav_b;
$strSQL = "INSERT INTO tb_member
        VALUES ('$user','$pass','$sex','$fav','$age') ";
        mysqli_query($link,$strSQL) or die(mysqli_error($link));

?>

<a href="../add_member.html">BACK</a>