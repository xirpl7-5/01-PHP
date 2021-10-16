<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP 5,5</title>
</head>
<body>
    <?php
    if (isset($_GET['nama']) AND isset($_GET['email']))
    {
        $nama =$_GET['nama'];
        $email =$_GET['email'];
    }
    else
    {
        echo "Maaf, and harus mengakses halaman ini dari form.html<br><br>";
    }
    if (!empty($nama))
    {
        echo "Nama: $nama <br /> Email : $email";
    }
    else
    {
        die("Maaf, anda harus mengisi nama");
    }
    ?>
</body>
</html>