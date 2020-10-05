// SPERAD OPERATOR
// "Memecah (expand / unpack) iterables menjadi single element."

// ITERABLES OBJECT
// 1.String
// 2.Array
// 3. Argumenst / NodeList
// 4. TypedArray
// 5. Map
// 6. Set
// 7. User - defined Iterables

// const mhs = ['mela', 'lala', 'nunu'];
// console.log(...mhs[0]);

// 1. digunakan untuk menggabungkan 2 array
// const mhs = ['mela', 'lala', 'nunu'];
// const dosen = ['nini', 'susi', 'sita'];
// const orang = [...mhs, 'Aji', ...dosen];
// const orang = mhs.concat(dosen);
// console.log(orang);

// 2. meng-copy array

// const mhs = ['mela', 'lala', 'nunu'];
// const mhs1 = mhs;
// mhs1[0] = 'Fajar';

// const mhs1 = [...mhs];
// mhs1[0] = 'Fajar';
// console.log(mhs);

// const liMhs = document.querySelectorAll('li');
// const mhs = [];
// for (let i = 0; i < liMhs.length; i++) {
//     mhs.push(liMhs[i].textContent);
// }
// console.log(mhs);

// const mhs = [...liMhs].map(m => m.textContent);
// console.log(mhs);

const nama = document.querySelector('.nama');
const huruf = [...nama.textContent].map(h => `<span>${h}</span>`).join('');
nama.innerHTML = huruf;
