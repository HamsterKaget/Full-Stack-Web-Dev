<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
            margin: 50px;
        }
    </style>

    <title>Document</title>
</head>
<body>

    <form action="insert.php" method="post">
        <label for="nama">Masukan Nama Lengkap : </label><br>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="alamat">Masukan Domisili / Alamat : </label><br>
        <textarea name="alamat" id="alamat" cols="30" rows="10" required></textarea>
        <br>
        <label for="umur">Masukan Umur Saat Ini : </label><br>
        <input type="number" name="umur" id="umur" required>
        <br>
        <label for="jenis_kelamin">Masukan Jenis Kelamin (L / P) : </label> <br>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="N">Pilih</option>
            <option value="L">Laki - Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        <br>
        <button type="submit" onclick="return confirm('Apa Kamu Yakin ?')">Masukan Data</button>
    </form> 


    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>