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
<center>
	
<div class="mkn_wrapper">
    <h1>Statement Form</h1>
    <form action="hasil.php" method="post">
        <input type="text" name="nama"  placeholder="masukan nama anda" required><br>
        <input type="text" name="alamat" placeholder="masukan alamat anda" required><br>
        <input type="text" name="hobi" placeholder="masukan hobi anda" required><br>
        <input type="text" name="skill" placeholder="masukan keahlian anda" required><br>
        <textarea name="ket" placeholder="masukan keterangan lain" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</div>
</center>
</body>
</html>

