<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Belajar Form Validation</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<h1 class="title">Ardyan Sukma Bryantara <span>@asbryantara</span>
</h1>
    
<div class="mkn_wrapper">
<center>
    <h1>Return Data</h1>
</center>
<div class="content">
    
    <?php
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $skill = $_POST["skill"];
    $hobi = $_POST["hobi"];
    $ket = $_POST["ket"];
    echo "Nama anda adalah <span>".$nama."</span><br>";
    echo "Anda tinggal di <span>".$alamat."</span><br>";
    echo "Keahlian anda <span>".$skill."</span><br>";
    echo "Hobi Anda <span>".$hobi."</span><br>";
    echo "Keterangan Lain <br> <span>".$ket."</span><br>";
    ?>
    <center><a href="index.php" class="">Home</a></center>
</div>
</div>
</body>
</html>

