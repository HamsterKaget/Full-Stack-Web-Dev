<?php

$nilai= $_POST['nilai'];
echo ($nilai>=80)?"Anda Lulus":"Anda tidak Lulus";

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
        <label for="nilai">nilai</label>
        <input type="text" name="nilai" id="nilai">
    </form> 

</body>
</html>