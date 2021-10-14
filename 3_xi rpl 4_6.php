<!DOCTYPE html>
<head>
    <title>Belajar PHP 3</title>
</head>
<body>
    <?php
    $nama_Siswa[0]=array(
        'Nama'=>"Satria",
        'Kelas'=>"Rpl 1",
    );
    $nama_Siswa[1]=array(
        'Nama'=>"Arsyi",
        'Kelas'=>"Rpl 2",
    );
    $nama_Siswa[2]=array(
        'Nama'=>"Dhika",
        'Kelas'=>"Rpl 3",
    );
    $nama_Siswa[3]=array(
        'Nama'=>"Evan",
        'Kelas'=>"Rpl 4",
    );
    $nama_Siswa[4]=array(
        'Nama'=>"Fabian",
        'Kelas'=>"Rpl 5",
    );
    $nama_Siswa[5]=array(
        'Nama'=>"Irfan",
        'Kelas'=>"Rpl 6",
    );
    $nama_Siswa = array_slice($nama_Siswa,0,2);
    echo"<pre>";
    print_r($nama_Siswa);
    echo"</echo>";
    ?>
</body>
</html>