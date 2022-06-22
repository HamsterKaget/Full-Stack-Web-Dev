<?php 

include('connect.php'); 

$keyword = $_GET['keyword'];

$query = mysqli_query($db,"SELECT * FROM karyawan WHERE nama LIKE '%$keyword%'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>List Data</title>
</head>
<body>

    <h1 style="text-align: center">List Data Dari Database</h1>

    <div class="menu" style="text-align: center;">
        <h3><a href="tambah.php">Tambah Data</a> | <a href="#">Lainnya</a></h3>
        
        <form action="" method="get">
            <input type="text" name="keyword" id="keyword" placeholder="Masukan nama .... " value='<?= $_GET['keyword']; ?>'>
            <button type="submit">Search</button>
        </form> 
    </div>

    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($results as $key => $value): ?>
            <tr>
                <td><?= $value['id']; ?></td>
                <td><a href="edit.php?id=<?= $value['id']; ?>">Edit</a> | <a href="delete.php?id=<?= $value['id']; ?>">Hapus</a></td>
                <td><?= $value['nama']; ?></td>
                <td><?= $value['alamat']; ?></td>
                <td><?= $value['umur']; ?></td>
                <td><?= $value['jenis_kelamin']; ?></td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>

    

</body>
</html>