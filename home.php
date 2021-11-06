<?php
session_start();
if (isset($_SESSION['username'])){
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="img/nicklahara.png" rel="icon">
        <title>Branda User</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/buku.css" rel="stylesheet">
        <script src="js/buku.js" type="text/javascript"></script>
        <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="kepala">
        <p>BOOK STORE</p>
            <div class="info">User : <?php echo $_SESSION['username']; ?></div>
        <form action="" method="post">
            <input type="text" placeholder="find book" name="book">
            <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <a href="logout.php"><button type="button" class="keluar"><span class="glyphicon glyphicon-log-out"></span></button></a>
        </div>
        <div class="databuku2">
            <table width="100%">
                <tr class="trsatu">
                    <td width="30px">No</td>
                    <td width="200px">Judul Buku</td>
                    <td width="200px">Pengarang</td>
                    <td width=200px>Penerbit</td>
                    <td width="70px">Jumlah</td>
                </tr>
                <?php
    mysql_connect('localhost','root','');
    mysql_select_db('buku');
    $ngl=mysql_query("select * from databuku");
    $n=1;
    while ($gl=mysql_fetch_array($ngl)){
        echo"
        <tr class='trdua'>
            <td>$n</td>
            <td>$gl[judul]</td>
            <td>$gl[pengarang]</td>
            <td>$gl[penerbit]</td>
            <td>$gl[jumlah]</td>
        </tr>
        ";
        $n++;
    }
    ?>
            </table>
        </div>
    </body>
</html>
<?php
}else{
    header("location:index.php");
}
?>