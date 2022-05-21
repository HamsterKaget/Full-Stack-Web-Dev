<?php 

    /* Variabel 
    Variabel dalah tempat untuk menyimpan data atau informasi.

    Sebuah data harus disimpan dalam variabel apabila hendak dilakukan pengolahan atau eksekusi lebih lanjut terhadap data tersebut.
    Aturan penulisan variabel dalam PHP
    Penulisan variabel dimulai dengan tanda $

    Penulisan variabel pada PHP selalu diawali dengan tanda dolar ($) setelahnya diikuti dengan karakter pertama beruba huruf atau underscore, penulisan variabel PHP tidak bisa diawali dengan angka, nama variabel hanya dapat berisi karakter alfa-numerik dan garis bawah (A-z, 0-9, dan _)

    Berikut contoh penulisan variabel yang benar dalam PHP : */

    $a;
    $nama;
    $Kelas;
    $_alamat_tinggal;
    $TEMPAT_LAHIR;

    // Berikut ini contoh penulisan variabel yang salah :

    /* 
    $1nama; //penulisan variabel tidak boleh diawalai dengan angka
    $kelas**; //penulisan variabel tidak boleh mengandung spasi
    $_tempat tinggal; //penulisan variabel tidak boleh mengandung spasi 
    */

    $x      = 100;
    $y      = 10;
    $jumlah = $x+$y;
    echo $jumlah;
?>
