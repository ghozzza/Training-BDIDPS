// function penjumlahan(a, b) {
//     return a + b;

// }

// function pengurangan(a, b) {
//     return a - b;
// }

// function perkalian(a, b) {
//     return a * b;
// }

// function pembagian(a, b) {
//     return a / b;
// }

// function perpangkatan(a, b) {
//     return Math.pow(a, b);
// }

// const hasil = penjumlahan(2, 3);
// const hasil2 = pengurangan(1, 7);
// const hasil3 = perkalian(4, 3);
// const hasil4 = pembagian(2, 3);
// const hasil5 = perpangkatan(2, 3);

// console.log(hasil);
// console.log(hasil2);
// console.log(hasil3);
// console.log(hasil4);
// console.log(hasil5);


// const readline = require('readline-sync');
//////////////////////////////////////
// import readline from 'readline-sync';
// while (true) {

//     console.info('program penambahan angka');
//     const number1 = readline.question('masukkan angka pertama: ');
//     const number2 = readline.question('masukkan angka kedua: ');

//     function add(a, b) {
//         return a + b;
//     }
//     const hasil6 = add(parseInt(number1), parseInt(number2));
//     console.log(hasil6);

//     console.log('Apakah kamu ingin mengulangi lagi? (y/n)');
//     const lanjut = readline.question('jawaban kamu: ');
//     if (lanjut == 'y') {
//         continue;
//     } else if (lanjut == 'n') {
//         break;
//     } else {
//         console.log('jawab yang bener');
//         break;
//     }
// }

// const arr1 = [1, 2.5, 'halo', 4, 5];
// const arr2 = [4, 5.5, 6, 'mantap', 7];
// const arr3 = ['ihir', '3tiga', 5, 7.5, 8];
// const arrx = [
//     ['good', 'tiga', 1.5],
//     ['morning', 'dua', 1.0],
//     ['guys', 'satu', 12.5],
//     [1, 'sstt', 3],
//     ['qiuqiu', 3.3, '1.0']
// ]
// console.log(arr1[2], arr2[1], arr3[2]);
// console.log(arrx);

// var arr = [7, 3.0, 20];

// if (arr[0] > 6 && arr[1] >= 3.0 && 18 <= arr[2] && arr[2] <= 23) {
//     console.log('skripsi dulu ngab');
// } else {
//     console.log('belajar dulu, semangat kakak');
// }

// nama, jenis. jumlah kaki, bertulang belakang, suaran,
//nama, berbatang, berbuah/biji/umbi, airatau darat, iklim

const nama = "kaktus";
const batang = "duri";
const buah = "tunas";
const hidup = "darat";
const iklim = "kering";

const obj = { nama, batang, buah, hidup, iklim };
console.log(obj);