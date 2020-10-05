//function init() {
//let nama = 'santika'; // local variabel
//function tampilNama() { // inner function (closure*)
//console.log(nama); // akses ke parent variabel
//}
//tampilNama();
//}
//init();

// function init() {
// let nama = 'Santika';
//     return function (nama) {
//         console.log(nama);
//     }

// }

// let panggilNama = init();
// panggilNama('Santika');
// panggilNama('Mela');

// KENAPA MENGGUNAKAN CLOSURE?
// 1. untuk membuat function factories
// function ucapkanSalam(waktu) {
//     return function (nama) {
//         console.log(`Halo ${nama}, Selamat ${waktu}, semoga harimu menyenangkan!`);
//     }
// }

// let selamatPagi = ucapkanSalam('pagi');
// let selamatSiang = ucapkanSalam('siang');
// let selamatMalam = ucapkanSalam('malam');

// console.dir(selamatMalam('mela'));



// 2. seolah-olah membuat private method
let add = (function () {
    let counter = 0;
    return function () {
        return ++counter;
    }
})();

counter = 100;

console.log(add());
console.log(add());
console.log(add());
console.log(add());