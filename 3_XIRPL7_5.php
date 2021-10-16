<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP 3</title>
</head>
<body>
    <?php
    $jeneng [0]= array(
        'Nama' => "Satria",
        'Kelas' => "Rpl 1"
    );
    $jeneng [1]= array(
        'Nama' => "Arsyi",
        'Kelas' => "Rpl 2"
    );
    $jeneng [2]= array(
        'Nama' => "Dhika",
        'Kelas' => "Rpl 3"
    ); 
    $jeneng [3]= array(
        'Nama' => "Evan",
        'Kelas' => "Rpl 4"
    );
    $jeneng [4]= array(
        'Nama' => "Fabian",
        'Kelas' => "Rpl 5"
    );
    $jeneng [5]= array(
        'Nama' => "Irfan",
        'Kelas' => "Rpl 6"
    );
    $akhir = array_slice ($jeneng,0,2);
    echo "<pre>";
    print_r ($akhir);
    echo "</pre>";
    ?>
</body>
</html>