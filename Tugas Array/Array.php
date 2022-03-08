<!DOCTYPE html>
<html leng="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Belajar BE</title>
</head>
<body>
    <h1>Latihan Array</h1>
    <?php 
    $employee = [
        'name' => 'Farah Ayu Ashari Haris',
        'email' => 'ayuf1544@gmail.com',
        'phone' => '081215087214',
        'hobbies' => ['nonton', 'membaca'],
      ];

    echo "Hai Perkenalkan nama saya ". $employee['name']; 
    echo "<br>";
    echo "Hobi saya yaitu ".$employee['hobbies'][0];
    echo " dan saya juga suka ".$employee['hobbies'][1];
    echo "<br>";
    echo "Kalian bisa hubungi saya lewat ".$employee['email'];
    echo " atau ".$employee['phone'];
    ?>