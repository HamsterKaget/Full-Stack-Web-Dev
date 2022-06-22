<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        Nama: <input type="text" name="nama">
        Alamat: <input type="text" name="alamat"><br><br>
        <input type="submit" value="submit">
    </form>

    <hr><br><h2>Text</h2>
    <form action="" method="post">
        Nama: <input type="text" name="nama">
        <input type="submit" value="submit">
    </form>

    <hr><br><h2>TextArea</h2>
    <form action="" method="post">
        Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
        <br><br>
        <input type="submit" value="submit">
    </form>

    <hr><br><h2>Password</h2>
    <form action="" method="post">
        Password: <input type="password" name="password">
        <input type="submit" value="submit">
    </form>

    <hr><br><h2>Date</h2>
    <form action="" method="post">
        Tanggal Beli: <input type="date" name="tanggal">
        <input type="submit" value="submit">
    </form>

    <hr><br><h2>Radio</h2>
    <form action="" method="post">
        <input type="button" value="ini Button" onClick="alert('Hello')" >
    </form>

    <hr><br><h2>CheckBox</h2>
    <form action="" method="post">
        <input type="checkbox" name="PHP" value="PHP"> PHP<br>
        <input type="checkbox" name="HTML" value="HTML" checked> HTML<br>
        <input type="checkbox" name="javascript" value="javascript" checked> Javascript<br>
    </form>

    <hr><br><h2>Options</h2>
    <form action="" method="post">
        <select name="program_studi">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Manajemen Informatika</option>
        </select>
    </form>

    <form action="" method="post"> 
        <input type="radio" name="program_studi" value="SI" > Sistem Informasi<br>
        <input type="radio" name="program_studi" value="TI"> Teknik Informatika<br>
        <input type="radio" name="program_studi" value="MI"> Manajemen Informatika
    </form>

    <hr><br><h2>File</h2>
    <form action="" method="post">
        Pilih File: <input type="file" name="dokumen">
    </form>
    
</body>
</html>