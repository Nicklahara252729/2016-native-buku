<?php
mysql_connect('localhost','root','');
mysql_select_db('buku');
$n=$_POST['username'];
$g=$_POST['password'];
$l=$_POST['level'];
$ngl=mysql_query("update user set username='$n',password='$g',level='$l'");
header("location:home.php");
?>