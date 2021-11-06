<?php
mysql_connect('localhost','root','');
mysql_select_db('buku');
$ngl=$_POST['username'];
$level=$_POST['level'];
$pass=$_POST['password'];
$sql=mysql_query("insert into user set username='$ngl', level='$level', password='$pass'");
header("location:index.php");
?>