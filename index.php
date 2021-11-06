<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <link href="img/nicklahara.png" rel="icon">
        <title>Book Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/buku.css" rel="stylesheet">
        <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="js/buku.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="isicontainer">
                <div class="register">
                    <p>REGISTRASI</p>
                    <form action="prosesregister.php" method="post">
                        <input type="hidden" name="level" value="user">
                        <input type="text" name="username" placeholder="Masukkan Nama" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit"><span class="glyphicon glyphicon-send"></span></button>
                    </form>
                </div>
            </div>
            <header>
                <p>BOOK STORE</p>
                <button type="button" class="btnlogin"><span class="glyphicon glyphicon-log-in"></span> Login</button>
            </header>
        </div>
        <div class="login">
            <span class="panah"></span>
            <p></p>
            <form action="proseslogin.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit"><span class="glyphicon glyphicon-send"></span></button>
            </form>
        </div>
    </body>
</html>