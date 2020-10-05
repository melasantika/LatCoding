// LOOPING ARRAY

// # for..of
// const mhs = ['mela', 'lala', 'dika'];

// menggunakan for biasa
// for (let i = 0; i < mhs.length; i++) {
//     console.log(mhs[i]);
// }

// menggunakan forEach: khusus untuk array
// mhs.forEach(m => console.log(m));

// menggunakan for..of
// for (const m of mhs) {

//     console.log(m);
// }

// LOOPING STRING
// const nama = 'mela';
// for (const n of nama) {
//     console.log(n);
// }

// const mhs = ['mela', 'lala', 'dika'];
// mhs.forEach((m, i) => {
//     console.log(`${m} adalah mahasiswa ke-${i + 1}`);
// });

// for (const [i, m] of mhs.entries()) {
//     console.log(`${m} adalah mahasiswa ke-${i + 1}`)
// }

// NODE LIST
// const liNama = document.querySelectorAll('.nama');
// liNama.forEach(n => console.log(n.textContent));
// for (n of liNama) {
//     console.log(n.innerHTML);
// }

// ARGUMENTS
// function jumlahAngka() {
//     // return arguments.reduce((a, i) => a + 1);; GAK BISA
//     // arguments.forEach(a => jumlah += a); GAK BISA
//     // return jumlah;

//     let jumlah = 0;
//     for (a of arguments) {
//         jumlah += a;

//     }
//     return jumlah;
// }

// console.log(jumlahAngka(1, 2, 3, 4, 5));


// #for..in
const mhs = {
    nama: 'mela',
    umur: 17,
    email: 'mela@gmail.com'
}

for (m in mhs) {
    console.log(mhs[m]);
}

// kalau kita mau loopingnya dari object pake for..in
// kalau kita mau mengulang isi array dan iterables object yang lain pakenya for..of