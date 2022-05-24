<?php 

// Pengertian tipe data String

// Tipe Data String adalah kumpulan dari karakter huruf ataupun karakter lainnya. String berupa teks diletakkan diantara tanda kutip (bisa tanda kutip tunggal ataupun tanda kutip ganda).

// Apabila tanda kutip pembuka adalah kutip tunggal, maka tanda kutip penutupnya juga harus kutip tunggal. Begitu pula sebaliknya apabila tanda kutip pembuka adalah kutip ganda, maka tanda kutip penutupnya juga harus kutip ganda. Contohnya "Selamat Datang" atau 'Selamat Datang'
// Perbedaan Penggunaan Kutip Tunggal dengan Kutip Ganda

// Perhatikan Contoh dibawah ini


$nama = "Meilan";
$pesan = "Selamat datang $nama";
echo $pesan;
  

// Pada contoh diatas, $nama dipanggil di $pesan dan saat ditampilkan akan menghasilkan output sebagai berikut.

// Selamat datang Meilan

// $nama dianggap sebuah variabel, sehingga nilai / value dari variabel tersebut yang digabungkan pada $pesan.

// Tetatpi apabila kita menggunakan petik satu seperti potongan kode dibawah ini :


$nama = 'Meilan';
$pesan = 'Selamat datang $nama';
echo $pesan;


// maka akan menghasilkan output sebagai berikut :

// Selamat datang $nama

// Dengan menggunakan petik tunggal, $nama pada $pesan dianggap string biasa, bukan sebuah variabel.
// Concat

// Concat digunakan untuk menggabungkan dua atau lebih string.

// Pada PHP fungsi CONCAT dilambangkan dengan titik (.)

//contoh1
$nama1 = "Ridwan";
$nama2 = "Kamal";
$nama_lengkap = $nama1.$nama2; 
echo $nama_lengkap; //hasilnya akan menampilkan RidwanKamal
echo "<br>"; // pindah baris baru

//contoh2
$pesan = "Hallo"." "."Assalamualaikum";
echo $pesan; //hasilnya akan menampilkan Hallo Assalamualaikum
echo "<br>"; // pindah baris baru

//contoh3
echo 'Selamat '.'Datang'; //hasilnya akan menampilkan Selamat Datang


?>