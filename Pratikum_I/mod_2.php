<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman PHP dengan Array</title>
</head>
<body>
    <?php
    //Penulisan array dapat dibuat seperti berikut
    $nama[] = "Maulana";
    $nama[] = "Bryan";
    $nama[] = "Syahputra";
    echo $nama[1].$nama[2].$nama[0];
    echo "<br>";

    //menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = ". $jum_array;
    ?>
</body>
</html>