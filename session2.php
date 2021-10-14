<!DOCTYPE html>
<head>
    <title>PHP</title>
</head>
<body>
    <?php session_start();
    echo "Nama anda adalah".$_SESSION['nama'];
    echo "<a href='session21.php'>Menuju ke halaman pertama</a>"; 
    ?>
</body>
</html>