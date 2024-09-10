<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php
    include 'functions.php';  
    $array_mhs = array(
        'Abdul' => array(89, 90, 54),
        'Budi'  => array(98, 65, 74),
        'Nina'  => array(67, 56, 84)
    );

    print_mhs($array_mhs);
    ?>
</body>
</html>
