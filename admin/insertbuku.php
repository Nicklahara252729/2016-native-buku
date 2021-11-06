<?php
mysql_connect('localhost','root','');
mysql_select_db('buku');
$n=$_POST['judul'];
$l=$_POST['pengarang'];
$g=$_POST['penerbit'];
$nl=$_POST['jumlah'];
$ngl=mysql_query("insert into databuku set judul='$n', pengarang='$l', penerbit='$g',jumlah='$nl'");
header("location:home.php");
?>