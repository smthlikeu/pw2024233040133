<?php  

$mahasiswa = [
    [//1
    'gambar'    => '1.png',
    'nrp'       => '233040101',
    'nama'      => 'Rivan Gibson',
    'email'     => 'Rivan@gmail.com',
    'jurusan'   => 'Ilmu Tempur'
    ],
    [//2
    'gambar'    => '2.png',
    'nrp'       => '233040102',
    'nama'      => 'Jhun Tao',
    'email'     => 'Jhun@gmail.com',
    'jurusan'   => 'Rusuh'
    ],
    [//3
    'gambar'    => '3.png',
    'nrp'       => '233040103',
    'nama'      => 'Yahyu Hidayat',
    'email'     => 'Yahyuu@gmail.com',
    'jurusan'   => 'Teknik Servis'
    ],
    [//4
    'gambar'    => '4.png',
    'nrp'       => '233040104',
    'nama'      => 'Abbase',
    'email'     => 'abas@gmail.com',
    'jurusan'   => 'Maruk'
    ],
    [//5
    'gambar'    => '5.png',
    'nrp'       => '233040105',
    'nama'      => 'Keshi Angan',
    'email'     => 'keshi@gmail.com',
    'jurusan'   => 'Racer'
    ],
    [//6
    'gambar'    => '6.png',
    'nrp'       => '233040106',
    'nama'      => 'Darren Z. Peterson',
    'email'     => 'darren@gmail.com',
    'jurusan'   => 'Tuning'
    ],
    [//7
    'gambar'    => '7.png',
    'nrp'       => '233040107',
    'nama'      => 'Daniel Stuards',
    'email'     => 'stuards@gmail.com',
    'jurusan'   => 'Bug abuse'
    ],
    [//8
    'gambar'    => '8.png',
    'nrp'       => '233040108',
    'nama'      => 'Hidayat yahyu',
    'email'     => 'hidayat@gmail.com',
    'jurusan'   => 'teleport'
    ],
    [//9
    'gambar'    => '9.png',
    'nrp'       => '233040109',
    'nama'      => 'Ryzz',
    'email'     => 'Ryzz@gmail.com',
    'jurusan'   => 'Patem'
    ],
    [//10
    'gambar'    => '10.png',
    'nrp'       => '233040110',
    'nama'      => 'Sora Dacosta',
    'email'     => 'sora@gmail.com',
    'jurusan'   => 'saller'
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Daftar Mahasiswa </title>
    <style>

        img {
            width : 250px;
            height: 250px;
            border: 5px solid;
        }

        ul li:first-child{
            list-style-type: none;
        }

    </style>
</head>
    <body>

    <h1> Daftar Mahasiswa </h1>

    <?php foreach($mahasiswa as $mhs) : ?>

    <ul>
        <li> <img src = "img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama    : <?= $mhs["nama"]; ?></li>
        <li>NRP     : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email   : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
    </body>
</html>