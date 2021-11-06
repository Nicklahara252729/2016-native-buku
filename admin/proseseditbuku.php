<?php
mysql_connect('localhost','root','');
mysql_select_db('buku');
$n=$_POST['judul'];
$g=$_POST['pengarang'];
$l=$_POST['penerbit'];
$nl=$_POST['jumlah'];
$ngl=mysql_query("update databuku set judul='$n',pengarang='$g',penerbit='$l',jumlah='$nl'");
header("location:home.php");
?>