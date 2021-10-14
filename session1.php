<!DOCTYPE html>
<head>
    <title>PHP</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['nama'] = "Daffa Hirza Niam";
    echo "<a href='session2.php'>Menuju ke halaman kedua</a>";
    ?>
</body>
</html>