<?php 

include("connect.php");

$id = $_GET['id'];
$delete = mysqli_query($db, "DELETE FROM karyawan WHERE id='$id'");

echo $id;

if($delete)
    header('Location: list.php'); 
else
    echo 'Delete data gagal';

?>