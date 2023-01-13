<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="profile">profile</a>
<a href="login">login</a>
<?php

$mahasiswa = [
    [
        "nama" => "Intan",
        "nim" => "20200040075",
        "jurusan" => "Teknik Informatika",
        "email" => "rsmwtintan@gmail.com",
        "nilai"=> 90,
    ],
    [
        "nama" => "sehunn",
        "nim" => "002",
        "jurusan" => "Teknik Informatika",
        "email" => "sehun@gmail.com",
        "nilai"=> 60,
    ],
    [
        "nama" => "ceye",
        "nim" => "003",
        "jurusan" => "Teknik Informatika",
        "email" => "chanyeol@gmail.com",
        "nilai"=> 80,
    ],
];

?>

<table style="width:100%; border:1px solid black">


<tr>
    <th style="border:1px solid black">Nama</th>
    <th style="border:1px solid black">NIM</th>
    <th style="border:1px solid black">Jurusan</th>
    <th style="border:1px solid black">Email</th>
    <th style="border:1px solid black">Nilai</th>
    <th style="border:1px solid black">status</th>
  </tr>

  <?php

  foreach ($mahasiswa as $mhs) { 
    echo "<trs>" ;

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['nama']}";
    echo "</td>";

    echo "<td style=' text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['nim']}";
    echo "</td>";

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['jurusan']}";
    echo "</td>";

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['email']}";
    echo "</td>";

    echo "<td style='text-align: center; border:1px solid black'>";
    echo "<br> {$mhs['nilai']}";
    echo "</td>";


    if ($mhs['nilai'] >75  ) {
        echo "<td style=' text-align: center;border:1px solid black'> lulus </td>";
    } 
    else {
        echo "<td style=' text-align: center;border:1px solid black'> tidak lulus </td>";
    }

    echo "</tr>";
} 
  ?>
  </table>
</body>
</html>