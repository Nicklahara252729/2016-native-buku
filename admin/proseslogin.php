<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('buku');
$ngl=$_POST['username'];
$nl=$_POST['password'];
$n="select * from user where username='$ngl' and password='$nl'";
$l=mysql_query($n) or exit ("Error query : <b>".$n."</b>");
if (mysql_num_rows($l)>0){
    $gl=mysql_fetch_array($l);
    $_SESSION['username']=$gl['username'];
    $_SESSION['password']=$gl['password'];
    $_SESSION['level']=$gl['level'];
    if($gl['level']=="admin")
    {
        header("location:home.php"); 
    }else{
       header("location:index.php");}
}else{
    header("location:index.php");
}
?>