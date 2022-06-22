<?php 

include("connect.php");

$id = $_GET['id'];
$delete = mysqli_query($db, "DELETE FROM karyawan WHERE id='$id'");

if($delete)
    header('Location: index.php'); 
else
    echo 'Delete data gagal';

?>