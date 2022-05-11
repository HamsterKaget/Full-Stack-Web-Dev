/**Pengertian Operator
 * Operator adalah simbol-simbol khusus yang digunakan untuk mengoperasikan suatu nilai data (operand).
 *
 * Macam Macam Operator
 * Operator Aritmatika
 * Operator Assigment
 */

/* Operator Aritmatika 
  Operator aritmatika digunakan untuk melakukan aritmatika pada angka.
 + 	Penambahan 	    1+1
 - 	Pengurangan 	1-1
 * 	Pengalian 	    1*3
 / 	Pembagian 	    10/2
 % 	Modulus (sisa pembagian) 	7/2
 ++ 	Increment 	variable++
 -- 	Decrement 	variable--
*/

// contoh :
let a = 10;
let b = 15;
let ab = a + b; // a + b = 10 + 15 = 25
console.log(ab); // => 25

/* Operator Assignment
 Operator Assignment memberikan nilai ke variabel Javascript.
 = 	    x=y 	x=y
 += 	x+=y 	x=x+y
 -= 	x-=y 	x=x-y
 *= 	x*=y 	x=x*y
 /= 	x/=y 	x=x/y
 %= 	x%=y 	x=x%y
*/

let x = 5;
x += 10; // x = x + 10 = 5 + 10 = 15
console.log(x); // => 15

/* Operator Pembanding
 == 	Sama dengan isinya
 === 	Sama isinya dan sama tipenya
 != 	Tidak sama dengan isinya
 !== 	Tidak sama isinya dan tidak sama tipenya
 > 	    Lebih dari
 < 	    Kurang dari
 >= 	Lebih dari atau sama dengan
 <= 	Kurang dari atau sama dengan
 ? 	    Operator ternary (if else sederhana)
*/

let c = 10;
let d = 10;
let e = 25;
console.log(c === d); // => mengecek apakah variabel c dan d bernilai sama atau tidak | true
console.log(c === e); // => mengecek apakah variabel c dan d bernilai sama atau tidak | false

/* Operator Logika
 && 	Logika And. Bernilai TRUE bila kedua kondisi bernilai TRUE.
 || 	Logika Or. Bernilai TRUE bila salah satu atau kedua kondisi bernilai TRUE.
 ! 	    Logika Not. Logika Pembalik. Bernilai TRUE bila kondisi FALSE, dan bernilai FALSE bila kondisi TRUE.
 Operator ini biasanya sering dipakai di percabangan dan perulangan
 */
