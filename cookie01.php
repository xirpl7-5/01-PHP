<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP 4,8</title>
</head>
<body>
    <?php
    $value = 'achmatim';
    $value2 = 'Achmad Solichin';

    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600);

    echo "<h1>Ini halaman pengesetan cookie</h1>";

    echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookie</h2>";
    ?>
</body>
</html>