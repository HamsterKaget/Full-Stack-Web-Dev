/* Pengertian Array
 Array merupakan variabel khusus yang dapat menampung lebih dari satu data pada suatu waktu.
 Contohnya kita mempunyai daftar item buah-buahan seperti pisang, pepaya, durian dan apel, kita bisa menyimpan semua item tersebut dalam satu variabel, misalnya variabel buah.
 Contoh lainnya kita mempunyai daftar item merk mobil seperti Avanza, Agya dan Ayla kita bisa menyimpan daftar item tersebut dalam satu variabel mobil.

 let buah = ["pisang", "pepaya", "durian", "apel"];
 let mobil = ["Avanza", "Agya", "Ayla"];
*/

/* Inisiasi Array
 Untuk membuat array pada JavaScript, kita bisa menggunakan sintaks di bawah ini.

 Syntax :
 let nama_array = [item1, item2, item3, ....];
 atau
 let nama_array = new Array(item1, item2, item3, ....);
*/
let mobil = ["Avanza", "Agya", "Ayla"];
var mobil1 = new Array("Avanza", "Agya", "Ayla");

/* Mengakses Data Array(1)
 Untuk mengakses data yang ada di dalam array kita bisa menggunakan sintaks di bawah ini. 

 Syntax :
 console.log(nama_array[key]);
 atau
 document.getElementById('divid').innerHTML=nama_array[key];

 ! key merupakan kunci dari elemen array, elemn array pertama memiliki kunci 0, elemen array kedua memiliki kunci 1 begitu seterusnya
*/

console.log(mobil[0]); // Output : "Avanza"

/* Mengubah Data Array
 Selain dapat mengakses data, kita juga bisa mengubah data array.

 Syntax :
 nama_array[key]="newItem";
*/
mobil[0] = "Fortuner"; // ["Avanza", "Agya", "Ayla"] berubah menjadi [Fortuner", "Agya", "Ayla"]
