// ARROW FUNCTION: Bentuk lain yang lebih ringkas dari function Expression

//  function expression
// const tampilNama = function (nama) {
//     return `Halo, ${nama}`;
// }
// console.log(tampilNama('mela'));

// Arrow Function
// 1 parameter
// const tampilNama = (nama) => { return `Halo, ${nama}`; }
// console.log('mela');

// 2 parameter
// kalau 2 parameter harus pake kurung
// const tampilNama = (nama, waktu) => {
//     return `Selamat ${waktu}, ${nama}`;
// }
// console.log(tampilNama('mela', 'siang'));

// kalau 1 parameter gak usah pake kurung
// implisit return
// const tampilNama = nama => `Halo, ${nama}`;
// console.log('mela');

// const tampilNama = () => 'hello world';
// console.log(tampilNama());


// menggunakan function biasa
// let mahasiswa = ['lala', 'li', 'nana'];
// let jumlahHuruf = mahasiswa.map(function (nama) {
//     return nama.length;
// });
// console.log(jumlahHuruf);

// ubah ke arrow function
// let mahasiswa = ['lala', 'li', 'nana'];
// let jumlahHuruf = mahasiswa.map(nama => nama.length);
// console.log(jumlahHuruf);

// ingin di tampilkan dalam bentuk object
// let mahasiswa = ['lala', 'li', 'nana'];
// let jumlahHuruf = mahasiswa.map(nama => ({ nama, jmlHuruf: nama.length }));
// console.table(jumlahHuruf);


// KONSEP THIS PADA ARROW FUNCTION
// constructor function
// const Mahasiswa = function () {
//     this.nama = 'mela';
//     this.umur = 17;
//     this.sayHello = function () {
//         console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
//     }

// }

// const mela = new Mahasiswa();


// ubah jadi arrow function
// const Mahasiswa = function () {
//     this.nama = 'mela';
//     this.umur = 17;
//     this.sayHello = () => {
//         console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
//     }

// }

// const mela = new Mahasiswa();


// arrow function tidak mengenal konsep this
// gunakan object literal
// const mhs1 = {
//     nama: 'mela',
//     umur: 17,
//     sayHello: () => {
//         console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
//     }
// }

// const Mahasiswa = function () {
//     this.nama = 'mela';
//     this.umur = 17;
//     this.sayHello = function () {
//         console.log(`Halo, nama saya ${this.nama}, dan saya ${this.umur} tahun.`);
//     }

//     setInterval(() => {
//         console.log(this.umur++);
//     }, 500)

// }

// const mela = new Mahasiswa();



const box = document.querySelector('.box');
box.addEventListener('click', function () {
    let satu = 'size';
    let dua = 'caption';

    if (this.classList.contains(satu)) {
        [satu, dua] = [dua, satu];
    }
    this.classList.toggle('size');
    setTimeout(() => {
        this.classList.toggle('caption');
    }, 600);
});