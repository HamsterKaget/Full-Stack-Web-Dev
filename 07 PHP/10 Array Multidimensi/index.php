<?php 

$arr = [250, true, ["Ayam", "Kucing"]];

var_dump($arr);
echo $arr[2][0];


$herbivora = ["Kambing", "Sapi"];
$karnivora = ["Kucing", "Anjing"];
$omnivora = ["ayam", "tikus"];

$animal = [ "herbivora" => $herbivora, "karnivora" => $karnivora, "omnivora" => $omnivora];

echo $animal[omnivora][1]; // output : tikus

?>