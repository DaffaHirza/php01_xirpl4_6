<!DOCTYPE html>
<head>
    <title>PHP</title>
</head>
<body>
    <?php 
    $value = 'Daffa';
    $value2 = 'Daffa Hirza Niam';

    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600);

    echo "<h1>Ini halaman pengesetan cookies<h1>";
    echo "<h2>Klik <a href='cookie2.php'>disini</a> untuk pemeriksaan cookies</h2>";
    ?>
</body>
</html>