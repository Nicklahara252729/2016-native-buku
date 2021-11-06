<?php
session_start();
if (isset($_SESSION['username'])){
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="../img/nicklahara.png" rel="icon">
        <title>Branda Admin</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/buku.css" rel="stylesheet">
        <script src="../js/buku.js" type="text/javascript"></script>
        <script src="../js/jquery-2.1.4.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="kepala">
        <p>BOOK STORE</p>
            
        <form action="" method="post">
            <input type="text" placeholder="find book" name="book">
            <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <a href="logout.php"><button type="button" class="keluar" title="Logout"><span class="glyphicon glyphicon-log-out"></span></button></a>
        </div>
        <div class="masukkan3">
            <p>Ubah Data Buku</p>
            <?php
    mysql_connect('localhost','root','');
    mysql_select_db('buku');
    $n=$_GET['id'];
    $ngl=mysql_query("select * from user where id='$n'");
    $g=mysql_fetch_array($ngl);
    ?>
            <form action="prosesedituser.php" method="post">
                <input type="text" name="username" placeholder="Username" value="<?php echo $g['username'];?>">
                <input type="text" name="password" placeholder="Password" value="<?php echo $g['password'];?>">
                <input type="text" name="level" placeholder="Level" value="<?php echo $g['level'];?>">
                <button type="submit" class="masuk3"><span class='glyphicon glyphicon-send'></span></button>
                <a href="home.php"><button type="button" class="masuk4"><span class='glyphicon glyphicon-remove'></span></button></a>
            </form>
        </div>
    </body>
</html>
<?php
}else{
    header("location:index.php");
}
?>