<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('buku');
$n=$_GET['id'];
$ngl=mysql_query("delete from user where id='$n'");
header("location:home.php");
?>