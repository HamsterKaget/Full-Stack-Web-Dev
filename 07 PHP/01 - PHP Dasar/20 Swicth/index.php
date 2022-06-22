<?php 
$nilai= $_POST['char'];
switch($nilai)
{
    case 'A':
        echo "Nilai Anda sangat memuaskan";
        break;
    case 'B':
        echo "Nilai Anda memuaskan";
        break; 
     case 'C':
        echo "Nilai Anda cukup";
        break; 
     case 'D':
        echo "Nilai Anda kurang";
        break; 
     case 'E':
        echo "Anda tidak lulus";
        break; 
     default :
        echo "Nilai tidak terdaftar";
        break;
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
        <label for="char">Nilai</label>
        <input type="text" name="char" id="char">
    </form> 
</body>
</html>