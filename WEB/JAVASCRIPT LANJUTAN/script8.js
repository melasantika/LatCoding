// Destructuring Assignment
// "Expression pada javascript yang membuat kita dapat membongkar nilai dari array atau properti dari ojec kedalam variabel yang terpisah"

// 1. Destructuring array

// const perkenalan = ['halo', 'nama', 'saya', 'mela'];
// const [salam, satu, dua, nama] = perkenalan;
// skipping items
// const [salam, , , nama] = perkenalan;
// console.log(salam);

// swap items atau menukar
// let a = 1;
// let b = 2;
// console.log(a);
// console.log(b);

// [a, b] = [b, a];
// console.log(a);
// console.log(b);

// return value pada function
// function coba() {
//     return [1, 2];
// }

// const [a, b] = coba();
// console.log(a);

// Rest parameter
// const [a, ...values] = [1, 2, 3, 4, 5];
// console.log(a);
// console.log(values);


// 2. Destructuring Object
// const mhs = {
//     nama: 'mela',
//     umur: 17
// }

// const { nama, umur } = mhs;
// console.log(nama);

// Assignment tanpa deklarasi object

// ({ nama, umur } = {
//     nama: 'mela',
//     umur: 17
// });

// console.log(nama);


// Assign ke variabel baru
// const mhs = {
//     nama: 'mela',
//     umur: 17
// }

// const { nama: n, umur: u } = mhs;
// console.log(n);


// bisa memberikan Default value
// const mhs = {
//     nama: 'mela',
//     umur: 17,
//     email: 'mela@gmail.com'
// }

// const { nama, umur, email = 'email@default.com' } = mhs;
// console.log(email);

// memberi nilai default + assign ke variabel baru
// const mhs = {
//     nama: 'mela',
//     umur: 17,
//     email: 'mela@gmail.com'
// }

// const { nama: n, umur: u, email: e = 'email@default.com' } = mhs;
// console.log(e);


// Rest parameter
// const mhs = {
//     nama: 'mela',
//     umur: 17,
//     email: 'mela@gmail.com'
// }

// const { nama, ...value } = mhs;
// console.log(value);

// mengambil field pada object, setelah dikirim sebagai parameter untuk function
const mhs = {
    id: 123,
    nama: 'mela',
    umur: 17,
    email: 'mela@gmail.com'
}

function getIdMhs({ id }) {
    return id;
}

console.log(getIdMhs(mhs));

