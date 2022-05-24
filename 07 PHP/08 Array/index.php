<?php 

// Pengertian tipe data Array

// Tipe data array adalah tipe data yang digunakan untuk menampung array.

// Sedangkan Array sendiri adalah kumpulan data yang memiliki tipe data sama dan disimpan dalam satu variabel tunggal.

// Sebagai contohnya kita akan menyimpan data nama-nama hewan yang kita miliki seperti dibawah ini :

String namaHewan1 = "Kucing";
String namaHewan2 = "Gajah";
String namaHewan3 = "Buaya";

/* Jika dilihat pada kode diatas memang tidak ada yang salah, tetapi jika kita ingin menyimpan nama-nama hewan dalam jumlah ratusan tentu cara diatas kurang efektif dan cukup melelahkan kita harus membuat variabel dengan jumlah yang cukup banyak hanya untuk menyimpan kumpulan nilai dengan tipe data yang sama, oleh karena itu data tersebut dapat disimpan dalam satu variabel array.
Membuat Array

Untuk membuat array, kita bisa menempatkan kumpulan data diantara array() atau bisa juga menempatkan kumpulan data diantara kurung siku [ ] .

Contoh : array(1,2,3,4,5) atau [1,2,3]. 

Setiap array otomatis memiliki kata kunci atau index yang dimulai dari 0, sesuai dengan urutannya di dalam array.

Untuk membuat dan mencetak array, perhatikan sintaks berikut ini

echo $nama_array[index]; //untuk mencetak salah satu elemen array 
print_r($nama_array); //untuk mencetak semua elemen array beserta index
var_dump($angka); //untuk mencetak semua elemen array beserta index dan tipe data */

$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
echo $angka[1];
echo "<br>";
echo $buah[3]; //mencetak array pada index ke 3

    // Note : Karena setiap elemen array mempunyai nomor index yang dimulai dari 0 pada posisi pertama, sehingga untuk menampilkan salah satu elemen array tersebut harus menyertakan nomor indexnya.

$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
print_r($angka);
echo "<br>";
print_r($buah);

// Jika kita lihat potongan kode diatas menggunakan fungsi print_r(nama_variabel) dimana fungsi print_r() digunakan untuk menampilkan semua elemen pada array. Selain itu kita juga dapat menggunakan var_dump($nama_array) seperti dibawah ini:

$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
var_dump($angka); 
echo "<br>";
var_dump($buah);

//     Note : Pada contoh di atas perintah print_r($nama_array); akan menampilkan seluruh elemen array beserta nomor indexnya, sedangkan perintah var_dump($nama_array); akan menampilkan seluruh elemen array beserta nomor indexnya dan tipe data array tersebut, maka dari itu kita tidak wajib menuliskan nomor index saat pemanggilan $nama_array.

// Menambah atau Mengubah Elemen Array

// Selain membuat array, kita juga dapat menambahkan dan mengubah elemen array.

// Untuk menambahkan elemen array, kita tinggal menuliskan sintaks sebagai berikut :

// $nama_array[]   = isi elemen;


$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
$angka[]= 6; // menambahkan data ke dalam array $angka dimana akan diletakan di index paling terak
$buah[] = "nangka"; 
var_dump($angka);
echo "<br>";
var_dump($buah);

// Sedangkan untuk mengubah elemen array, kita hanya perlu menuliskan sintaks :

// $nama_array[noindex]= isi elemen;


$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
//tuliskan nama array dan nomor index yang akan diubah, lalu isi dengan data baru
$angka[3]   = 99;  
$buah[2]    = "strawberry";
var_dump($angka);
echo "<br>";
var_dump($buah);


?>