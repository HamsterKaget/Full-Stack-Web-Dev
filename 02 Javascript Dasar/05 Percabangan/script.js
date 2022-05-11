/* Percabangan / kondisi
 Pernyataan kondisional digunakan untuk melakukan tindakan yang berbeda berdasarkan pada kondisi yang berbeda. Sangat sering ketika kita menulis kode, kita ingin melakukan tindakan yang berbeda untuk keputusan yang berbeda.

 Pada javascript kita bisa menggunakan beberapa sintaks di bawah untuk menjalankan pernyataan kondisional.
    If
    Else
    Else If
    Switch
*/

/* if
 Gunakan if untuk menentukan blok kode yang akan dieksekusi jika kondisi yang ditentukan bernilai benar.
 if harus diketik dengan huruf kecil, apabila tidak, maka javascript akan menampilkan pesan error.

 Syntax :
 if( kondisi ){
     // kode yang akan dijalankan bila kondisi bernilai true / benar
 }
*/

// contoh :
let waktu = 7;
/* kondisi dibawah memiliki arti jika variabel waktu nilainya diatas atau sama dengan 5 dan 
variabel waktu dibawah atau sama dengan 10 maka kode di dalam block {} akan dieksekusi, singkatnya jika variabel waktu
diantara 5 dan 10 maka code di dalam block {} akan dieksekusi */
if (waktu >= 5 && waktu <= 10) {
  console.log("Selamat pagi");
}

if (waktu > 10 && waktu <= 15) {
  console.log("Selamat siang"); // kode tidak akan dijalankan karena kondisi diatas tidak terpenuhi
}

/* Else
 Gunakan else untuk menentukan blok kode yang akan dieksekusi jika kondisi yang ditentukan bernilai salah.

 Syntax :
 if(kondisi){
    // kode yang akan dijalankan jika kondisi bernilai true
 } else {
     // kode yang akan dijanlkan jika kondisi bernilai false / saattidak ada kondisi yang bernilai true
 }
*/

// contoh :
let umur = 15;
if (umur >= 18) {
  // jika kondisi variabel umur diatas atau sama dengan 18 maka kode dibawah akan dieksekusi
  console.log("Kamu cukup umur");
} else {
  // jika kondisi diatas bernilai false / tidak terpenuhi maka kode dibawah akan dieksekusi
  console.log("Kamu dibawah umur");
}

/* Else if
 Gunakan pernyataan else if untuk menentukan kondisi baru jika kondisi pertama salah.

 Syntax : 
 if ( kondisi1 ) {
     // kode yang akan dijalankan jika kondisi1 bernilai true
 } else if ( kondisi2 ) {
     // Kode yang akan dijalankan jika kondsi2 bernilai true
 } else {
     // kode yang akan dijalankan jika kondsi1 dan kondisi2 bernilai false
 }
*/

// contoh :
let umur1 = 80;
if (umur1 < 18) {
  // kode yang akan dijalankan jika variabel1 dibawah 18
  console.log("Kamu dibawah umur");
} else if (umur1 > 75) {
  // kode yang akan dijalankan jika variabel1 diatas 75
  console.log("Kamu merupakan senior");
} else {
  // kode yang akan dijalankan jika kedua kondisi diatas bernilai false / tidak terpenuhi
  console.log("Kamu cukup umur");
}

/* Switch
 Pernyataan switch digunakan untuk melakukan tindakan yang berbeda berdasarkan pada kondisi yang berbeda. (sama seperti if-else if-else)

 Syntax :
 switch(ekspresi) {
    case x:
         // code
    break;
    case y:
        // code
    break;
    case z:
        // code 
    break;
    default:
        // code
 }
*/

// contoh :
let x = 1;
switch (x) {
  case 0:
    console.log("Padam");
    break; // <- break harus selalu ditambahkan diakhir setiap case, jika tidak maka code diseluruh case dibawahnya akan ikut tereksekusi
  case 1:
    console.log("Nyala");
    break;
  default:
    console.log("Error");
}
