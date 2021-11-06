<?php
session_start();
mysql_connect('localhost','root','satusampe250599');
mysql_select_db('2016_web_native_buku');
$ngl=$_POST['username'];
$nl=$_POST['password'];
$l="select * from user where username='$ngl' and password='$nl'";
$nick=mysql_query($l) or exit ("Error query : <b>".$l."</b>");
if (mysql_num_rows($nick)>0){
    $r=mysql_fetch_array($nick);
    $_SESSION['username']=$r['username'];
    $_SESSION['password']=$r['password'];       
    header("location:home.php");    
}else{
    header("location:index.php");
}
?>