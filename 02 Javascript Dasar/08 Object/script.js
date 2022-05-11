/* Pengertian Object
 Object pada bahasa pemroraman merupakan "abstraksi" dari benda yang ada di dunia nyata. Object dapat digunakan untuk menyimpan data.
 Pada JavaScript, object terdiri dari name dan value(variable) atau method(fungsi). Name dan value disebut sebagai property.
*/

/* Inisiasi Object & properti
 Berdasarkan analogi di atas, kita bisa menginisialisasi property sebagai berikut ini.

 Contoh :
*/
var Mobil1 = { nama: "Toyota", tipe: "Agya", berat: 600, warna: "putih" };

/* Inisiasi Method
 Selain inisialisasi property, kita juga bisa menginisialisasi method di dalam object.

 Contoh :
 Pada contoh di bawah, selain menginisialisasi property kita juga menginisialisasi fungsi maju dan mundur pada object Mobil.
*/
let Mobil = {
  nama: "Toyota",
  tipe: "Agya",
  berat: 600,
  warna: "putih",
  maju: function () {
    return "Mobil Melaju";
  },
  mundur: function () {
    return "Mobil Mundur";
  },
};

/* Mengakses Property dan Method pada Object
 Untuk mengakses method pada object kita bisa menggunakan contoh sintaks seperti di bawah ini.

 Syntax :
 nama_object.nama_method();
*/
console.log(Mobil.nama + " " + Mobil.maju());
