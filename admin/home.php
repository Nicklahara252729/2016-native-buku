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
            <div class="info">Administrator : <?php echo $_SESSION['username']; ?></div>
        <form action="" method="post">
            <input type="text" placeholder="find book" name="book">
            <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </form>
            <a href="logout.php"><button type="button" class="keluar" title="Logout"><span class="glyphicon glyphicon-log-out"></span></button></a>
        </div>
        <div class="datauser">
            <table width="100%">
                <tr class="truser">
                    <td width="30px">No</td>
                    <td width="190px">Username</td>
                    <td width="190px">Password</td>
                    <td width="190px">Level</td>
                    <td width="70px">Action</td>
                </tr>
                <?php
    mysql_connect('localhost','root','');
    mysql_select_db('buku');
    $ngl=mysql_query("select * from user");
    $n=1;
    while ($nl=mysql_fetch_array($ngl)){
        echo"<tr class='truser2'>
        <td>$n</td>
        <td>$nl[username]</td>
        <td>$nl[password]</td>
        <td>$nl[level]</td>
        <td><a href='edituser.php?id=$nl[id]'><button type='button' class='edit' title='Edit'><span class='glyphicon glyphicon-edit'></span></button></a>
        <a href='hapususer.php?id=$nl[id]'><button type='button' class='edit' title='Hapus'><span class='glyphicon glyphicon-trash'></span></button></a>
        </td>
        </tr>";
        $n++;
    }
    ?>
            </table>
        </div>
        <div class="databuku">
            <table width="100%">
                <tr class="trsatu">
                    <td width="30px">No</td>
                    <td width="30px">Id Buku</td>
                    <td width="200px">Judul Buku</td>
                    <td width="200px">Pengarang</td>
                    <td width=200px>Penerbit</td>
                    <td width="70px">Jumlah</td>
                    <td width="70px">Action</td>
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
            <td>$gl[id]</td>
            <td>$gl[judul]</td>
            <td>$gl[pengarang]</td>
            <td>$gl[penerbit]</td>
            <td>$gl[jumlah]</td>
            <td>
            <a href='editbuku.php?id=$gl[id]'><button type='button' class='edit' title='Edit'><span class='glyphicon glyphicon-edit'></span></button></a>
        <a href='hapusbuku.php?id=$gl[id]'><button type='button' class='edit' title='Hapus'><span class='glyphicon glyphicon-trash'></span></button></a>
            </td>
        </tr>
        ";
        $n++;
    }
    ?>
            </table>
        </div>
        <div class="masukkan">
            <p>Masukkan Data Buku</p>
            <form action="insertbuku.php" method="post">
                <input type="text" name="judul" placeholder="Judul Buku">
                <input type="text" name="pengarang" placeholder="Pengarang">
                <input type="text" name="penerbit" placeholder="Penerbit">
                <input type="text" name="jumlah" placeholder="Jumlah">
                <button type="submit" class="masuk"><span class='glyphicon glyphicon-send'></span></button>
                <button type="reset" class="masuk2"><span class='glyphicon glyphicon-remove'></span></button>
            </form>
        </div>
    </body>
</html>
<?php
}else{
    header("location:index.php");
}
?>