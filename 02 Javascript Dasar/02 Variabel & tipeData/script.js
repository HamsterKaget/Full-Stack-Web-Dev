/** tipe data
 * Tipe data adalah sebuah cara yang digunakan untuk menentukan jenis suatu data tersebut.
 * Kata lain dari hal ini adalah "deklarasi variabel".
 *
 * Javascript mempunyai beberapa tipe data yang digunakan.
 * String = "Halo Dunia"
 * Boolean = true/false
 * Number = 10,9.5
 * Array = [1,2,3]
 * Object = {halo:"dunia"}
 */

/** variabel
 * Variabel adalah suatu tempat yang digunakan untuk menampung data atau konstanta di memori yang
 * mempunyai nilai yang dapat berubah-ubah selama proses program.
 *
 * ES6 mempunyai beberapa keyword untuk membuat variabel yaitu var, let,dan const
 * var => tidak mendukung scoping variabel / variabel bersifat global
 * let => mendukung scoping variabel ( recomended for ES6 )
 * const => gunakan const ketika nilai dari variabel bersifat tetap seperti const phi = 3.14
 *
 * Syntax :
 * let nama_variabel = nilaidata
 */

// todo : penggunaan var , let dan const
const name = "HamsterKaget";
var age = 15;
let city = "Bogor";

console.log(name + age + city); // => HamsterKaget 15 Bogor

// Melakukan pengecekan variabel
let animal = "Cat";
age = 2.5;
let isCute = true;
console.log(typeof animal); // Output = String
console.log(typeof age); // Output = number
console.log(typeof isCute); // Output = Boolean

// reassign / update variabel
name = "HamsterGaKaget"; // => error karena name merupakan const dan const tidak bisa diubah nilainya
age = 17;
city = "Depok";

console.log(name + age + city); // error karena variabel name tidak bisa di update karena merupakan const
