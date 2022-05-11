/* Perulangan 
 Dalam bahasa pemrograman, pengulangan dapat digunakan untuk "mengulang" kode yang kita inginkan, dengan data yang berbeda.

 Pengulangan pada Javascript bisa menggunakan beberapa cara antara lain.
 > For Loop
 > While
 > Do While
*/

/* For Loop
 For loop digunakan untuk pengulangan melalui blok kode beberapa kali.

 Syntax:
 for(pernyataan1; pernyataan2; pernyataan3) {
     // Code ditulis disini
 }

 Penyataan 1 dijalankan (satu kali) sebelum eksekusi blok kode.
 Pernyataan 2 mendefinisikan kondisi untuk mengeksekusi blok kode.
 Pernyataan 3 dijalankan (setiap saat) setelah blok kode dijalankan.
*/

//todo : membuat perulangan menggunakan for loop
for (let i = 1; i <= 10; i++) {
  console.log("Perulangan ke " + i);
}
// output akan menjadi 'Perulangan ke <i>' i disini adalah variabel let i yang akan terus bertambah

/* While Loop 
 While digunakan untuk pengulangan melalui blok kode selama kondisi tertentu benar.

 Syntax :
 while ( kondisi ) {
     // code di tulis disini
 }
*/

// todo : membuat perulangan menggunakan while loop
let x = 1; // inisiasi variabel
// x <= 10 adalah pernyataan kondisi , artinya jika variabel x dibawah atau sama dengan 10 maka code didalam block {} akan di eksekusi
while (x <= 10) {
  console.log("Perulangan ke " + x);
  x++; /* <= update variabel , jangan lupa untuk selalu mengupdate variabel di akhir statement 
        while loops, jika tidak maka code akan mengalami infinite loop karena kondisi akan selalu bernilai true */
}

/* Do While Loop
 Do while loop adalah varian dari while loop. Looping ini akan mengeksekusi kode satu kali, sebelum memeriksa apakah kondisinya benar, jika kondisinya benar maka akan mengulang loop.

 Syntax :
 do {
     //code yang akan dijalankan
 } while ( kondisi )
*/

// todo : membuat perulangan menggunakan do while loops
let y = 1; // inisiasi variabel
do {
  console.log("Perulangan ke " + y);
  y++; // update variabel
} while (y <= 10); // pernyataan kondisi
