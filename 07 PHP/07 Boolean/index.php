<?php 

// Pengertian tipe data Boolean

// Tipe data boolean adalah tipe data yang mempunyai nilai dengan dua kemungkinan, yaitu TRUE atau FALSE.

// Tipe data boolean digunakan untuk melakukan pengecekan terhadap suatu kondisi.

$nilai1 = 10;
$nilai2 = 5;
$kondisi = $nilai1>$nilai2; //cek kondisi apakah bernilai true(benar) atau false(salah)
var_dump($kondisi);

/*
Contoh di atas melakukan pengecekan apakah benar 10 lebih besar dari 5, apabila benar maka menghasilkan nilai true.

Untuk melakukan pengecekan sebuah kondisi, biasanya kita membutuhkan operator perbandingan atau operator logika.
Operator Perbandingan
Operator 	Nama 	Contoh 	Keterangan
== 	sama dengan 	$a == $b 	true apabila $a sama dengan $b
!= 	tidak sama dengan 	$a != $b 	true apabila $a tidak sama dengan $b
<> 	tidak sama dengan 	$a <>$b 	true apabila $a tidak sama dengan $b
> 	lebih besar dari 	$a > $b 	true apabila $a lebih besar dari $b
< 	lebih kecil dari 	$a < $b 	true apabila $a lebih kecil dari $b
>= 	lebih besar / sama dengan 	$a >= $b 	true apabila $a lebih besar / sama dengan $b
<= 	lebih kecil / sama dengan 	$a <= $b 	true apabila $a lebih kecil / sama dengan $b
Operator Logika
Operator 	Nama 	Contoh 	Keterangan
and 	And 	$a and $b 	true apabila keduanya ($a dan $b) bernilai true
or 	Or 	$a or $b 	true apabila salah satu ($a atau $b) bernilai true
xor 	Xor 	$a xor $b 	true apabila salah satu saja dari $a atau $b bernilai true, bukan keduanya
&& 	And 	$a && $b 	true apabila keduanya ($a dan $b) bernilai true
|| 	Or 	$a || $b 	true apabila salah satu ($a atau $b) bernilai true
! 	Not 	!$a 	true apabila $a bernilai false
Perbedaan penulisan Boolean dengan String

Saat memberi nilai true atau false pada tipe data boolean tanpa menggunakan tanda kutip, karena apabila menggunakan tanda kutip akan menjadi tipe data string. Perhatikan contoh di bawah ini : */
$a  = TRUE;
$b  = "TRUE";
var_dump($a);
echo "<br>";
var_dump($b);


/* var_dump() : digunakan untuk menampilkan nilai / isi sebuah variabel disertai dengan tipe data

Pada contoh di atas, var_dump($a); menghasilkan bool(true) yang artinya memiliki tipe data boolean dengan nilai true.

Sedangkan var_dump($b); menghasilkan string(4) "TRUE" yang artinya memiliki tipe data string dengan panjang 4 karakter dengan nilai "TRUE".

Nilai TRUE atau FALSE pada tipe data boolean tanpa diberi awalan dan akhiran tanda kutip. */


?>