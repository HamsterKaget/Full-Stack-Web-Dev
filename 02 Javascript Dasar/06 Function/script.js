/* Pengertian Function
 Fungsi JavaScript adalah blok kode yang dirancang untuk melakukan tugas tertentu. 
 Fungsi JavaScript dijalankan ketika "sesuatu" memanggilnya.

 Aturan Membuat Function
    - Fungsi JavaScript didefinisikan dengan keyword "function", lalu diikuti oleh nama fungsi, lalu diikuti oleh tanda kurung ().
    - Nama fungsi dapat berisi huruf, angka, underscore (_), dan tanda dolar (aturan yang sama dengan variabel).
    - Tanda kurung termasuk nama parameter dipisahkan oleh koma, contohnya seperti (parameter1, parameter2, ...)
    - Kode yang akan dieksekusi ditempatkan di dalam kurung kurawal: {}

 Membuat Function

 Syntax :
 function namaFunction(param1, param2) {
     // code ditulis disini
 }

 ==============================================

 Function dengan Return
 Fungsi JavaScript dapat ditambahkan dengan statement "return" untuk mengembalikan data.

 Syntax :
 function namaFunction(param1, param2) {
     // code ditulis disini

     // diakhir statement return akan mengembalikan nilai dari code yang sudah dieksekusi diatas
     return nilai // !Note: kode yang ditulis dibawah return tidak akan dieksekusi
 }
*/

// Membuat Function Sederhana
function luasSegiEmpat(panjang, lebar) {
  console.log("luas = " + panjang * lebar);
}
// Memanggil Function
luasSegiEmpat(10, 20); // <- 10 = panjang , 20 = lebar

// Membuat Function Dengan nilai return
function luasSegiTiga(alas, tinggi) {
  let luas = (alas * tinggi) / 2;
  return luas;
}
// Memanggil Function yang mengembalikan nilai, letakan di dalam variabel saat memanggil
hitung1 = luasSegiTiga(10, 20);
console.log("Luas = " + hitung1);
