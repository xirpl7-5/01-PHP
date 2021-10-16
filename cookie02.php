<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP 4,9</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['username'])) {
        echo "<h1>Cookie 'username' ada. Isinya : " .$_COOKIE
        ['username']."</h1>";
    } else {
        echo "<hi>Cookie 'username' Tidak ada.</h1>";
    }
    if(isset($_COOKIE['namalengkap'])) {
        echo "<h1>Cookie 'namalengkap' ada. Isinya : " .$_COOKIE
        ['namalengkap']."</h1>";
    } else {
        echo "<h1>Cookie 'namalengkap' TIDAK ada. </h1>";
    }

    echo "<h2>Klik <a href='cookie01.php'>di sini</a> untuk
    penciptaan cookie</h2>";
    ?>
</body>
</html>
    