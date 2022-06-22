<?php 

$nilai = $_POST['Nilai'];
if($nilai >= 70) {
    echo "Selamat Anda Lulus  !";
} else {
    echo "Anda tidak lulus";
}

?>

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
        <label for="Nilai">Nilai</label>
        <input type="text" name="Nilai" id="Nilai">
    </form> 

</body>
</html>