<?php

$message = "Mai san SUKIDA !!!";
file_put_contents("content.txt", $message, FILE_APPEND);


$isi = file_get_contents("content.txt");

echo $isi;


?>

<?php
$karyawan   =[
                ['nama'=>'Toni','alamat'=>'Bandung'],
                ['nama'=>'Naufal','alamat'=>'Bandung'],
                ['nama'=>'Davi','alamat'=>'Jakarta']
            ];
$data = json_encode($karyawan);
file_put_contents('data.txt',$data);
$output = file_get_contents('data.txt');
$hasil  = json_decode($output);
print_r($hasil);
?>