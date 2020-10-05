// cara membuat object pada javascript
// 1. Object literal (harus bikin duplikat object tapi namanya harus beda)
// problemnya tidak efektif untuk object yang banyak
// let mahasiswa1 = {
//     nama: 'Mela',
//     energi: 10,
//     makan: function (porsi) {
//         this.energi = this.energi + porsi;
//         console.log(`Halo ${this.nama}, selamat makan!`)
//     }
// }

// let mahasiswa2 = {
//     nama: 'Mela',
//     energi: 10,
//     makan: function (porsi) {
//         this.energi = this.energi + porsi;
//         console.log(`Halo ${this.nama}, selamat makan!`)
//     }
// }


// 2. Function Declaration(gak usah bikin duplikat objectnya cukup bikin kerangkanya aja)

// const methodMahasiswa = {
//     makan: function (porsi) {
//         this.energi += porsi;
//         console.log(`halo ${this.nama}, selamat makan!`);
//     },

//     main: function (jam) {
//         this.energi -= jam;
//         console.log(`halo ${this.nama}, selamat bermain`);
//     },

//     tidur: function (jam) {
//         this.energi += jam * 2;
//         console.log(`halo ${this.nama}, selamat tidur`);
//     }
// };

// function Mahasiswa(nama, energi) {
//     // deklarasi variabel
//     let mahasiswa = Object.create(methodMahasiswa);
//     mahasiswa.nama = nama;
//     mahasiswa.energi = energi;

//     return mahasiswa;
// }

// kita harus instansiasi untuk memanggil objectnya
// let mela = Mahasiswa('Mela', 10);
// let santika = Mahasiswa('Santika', 10);





// versi object dengan konsep pewarisan
// function Mahasiswa(nama, energi) {

//     this.nama = nama;
//     this.energi = energi;

// }

// Mahasiswa.prototype.makan = function (porsi) {
//     this.energi += porsi;
//     return `halo ${this.nama}, selamat makan!`;
// }

// Mahasiswa.prototype.main = function (jam) {
//     this.energi -= jam;
//     return `halo ${this.nama}, selamat main!`;
// }

// Mahasiswa.prototype.tidur = function (jam) {
//     this.energi += jam * 2;
//     return `halo ${this.nama}, selamat tidur!`;
// }

// let mela = new Mahasiswa('Mela', 10);

// versi class
// class Mahasiswa {
//     constructor(nama, energi) {
//         this.nama = nama;
//         this.energi = energi;
//     }

//     makan(porsi) {
//         this.energi += porsi;
//         return `halo ${this.nama}, selamat makan!`;
//     }

//     main(jam) {
//         this.energi -= jam;
//         return `halo ${this.nama}, selamat main!`;
//     }

//     tidur(jam) {
//         this.energi += jam * 2;
//         return `halo ${this.nama}, selamat tidur!`;
//     }
// }

// let mela = new Mahasiswa('Mela', 10);
// let santika = new Mahasiswa('Mela', 20);









// 3. Constructor Function
// menggunakan keyword new mirip function declaration
// - kita tidak perlu menuliskan deklarasi variabel dan return, itu sudah dibuat otomatis oleh javascriptnya
// function Mahasiswa(nama, energi) {
//     this.nama = nama;
//     this.energi = energi;

//     this.makan = function (porsi) {
//         this.energi += porsi;
//         console.log(`halo ${this.nama}, selamat makan!`);
//     }

//     this.main = function (jam) {
//         this.energi -= jam;
//         console.log(`halo ${this.nama}, selamat bermain`);
//     }
// }

// let mela = new Mahasiswa('Mela', 10);




