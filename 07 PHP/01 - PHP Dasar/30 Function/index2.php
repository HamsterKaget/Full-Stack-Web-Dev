<?php 

    function luasSegitiga($alas, $tinggi) {
        return $alas * $tinggi / 2;
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
        <label for="alas">Alas : </label>
        <input type="number" name="alas" id="alas">

        <label for="tinggi">tinggi : </label>
        <input type="number" name="tinggi" id="tinggi">

        <label for="submit">Submit</label>
        <input type="submit" name="submit" id="submit">
    </form> 

    <?php 
    
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];

    echo "Luas Segitiga Adalah : " . luasSegitiga($alas, $tinggi);

    ?>

</body>
</html>