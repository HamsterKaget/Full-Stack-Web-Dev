<?php 
/* Variabel digunakan untuk menampung nilai tertentu. Nilai yang disimpan di dalam variabel selanjutnya dapat dipindahkan ke dalam database, atau ditampilkan kembali ke pengguna. Variabel dapat menyimpan data dari berbagai tipe data.
Macam-macam Tipe data pada PHP

Pada PHP tipe data yang didukung antara lain :

    String
    Interger
    Float
    Boolean
    Array
    Object
    Null
    Resource

Pada pembahasan kali ini, kita akan membahas tipe data integer dan float.
Integer

Tipe data numerik yang menunjukkan bilangan bulat.

Aturan untuk tipe data integer :

    Harus memiliki minimal 1 digit
    Tidak boleh memiliki titik desimal
    Bisa berupa bilangan positif maupun bilangan negatif atau 0

Contoh bilangan bulat / integer antara lain : 1, 2, -1, -2, atau 0.

Penulisan integer didalam PHP seperti dibawah ini: 
*/
    $a = 10;
    $b = 11;
    $hasil = $a * $b; //contoh perkalian
    echo $hasil; 


    /* Float
     Tipe data berupa angka yang memiliki titik desimal, contoh : 5.98 atau 7.16 dst

     Penulisan float didalam PHP seperti dibawah ini : 
    */
    $a = 1.5;
    $b = 2.5;
    $hasil = $a + $b; //contoh penjumlahan
    echo $hasil;
?>

<?php /* Selain itu kita juga dapat membulatkan angka dibelakang titik desimal / koma pada tipe data float dengan menggunakan fungsi round().

        round(10.3333) = menghasilkan nilai 10
        round(10.5666)=menghasilkan nilai 11
        round(10.333,2)=menghasilkan 2 angka dibelakang koma yaitu 10.33
        round(10.556,1)=menghasilkan 1 angka dibelakang koma yaitu 10.6

Fungsi round() akan membulatkan keatas jika desimal lebih dari 0,5, tetapi jika kurang dari 0,5 maka tidak akan dibulatkan ke atas.
Operator Aritmatika

Berikut operator aritmatika yang dapat kita gunakan untuk melakukan operasi perhitungan.
Operator 	Nama 	Contoh 	Hasil
+ 	Penambahan 	$a+$b 	Menjumlahkan $a dengan $b
- 	Pengurangan 	$a-$b 	Mengurangkan $a dengan $b
* 	Perkalian 	$a*$b 	Mengalikan $a dengan $b
/ 	Pembagian 	$a/$b 	Membagi $a dengan $b
% 	Modulus 	$a%$b 	Sisa $a setelah dibagi dengan $b
Operator Increment dan Decrement

Selain operator aritmatika, pada PHP juga terdapat operator Increment dan Decrement.
Operator 	Nama 	Contoh 	Hasil
++ 	Increment 	$a++ 	menambahkan 1 nilai terhadap $a
-- 	Decrement 	$a-- 	mengurangi 1 nilai terhadap $a */ ?>

<?php
    $a=10;
    $a++;
    echo $a; // menghasilkan nilai 11
    $b = 10;
    $b--;
    echo $b; //menghasilkan nilai 9
    $c = 10;
    $c++;
    $c++;
    echo $c;//akan menghasilkan nilai 12 karena menggunakan 2x operator increment
?>