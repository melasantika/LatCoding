// Template literal atau template String: adalah string literal yang memungkinkan adanya expression di dalamnya.
// 1. menggunakan`` back tick
// 2. multi - line string
// 3. embededded expression
// 4. HTML fragments
// 5. expression interpolation
// 6. Tagged Template


// contoh template literal sederhana
// const nama = 'mela';
// const umur = 17;
// console.log(`Halo, nama saya ${nama}, dan saya ${umur} tahun.`);
// kalau pake konket ribet
// console.log('Halo, nama saya ' + nama + ', dan saya ' + umur + 'tahun');


//  embededded expression
// console.log(`${1 + 1}`);
// console.log(`${alert('halo!')}`);
// const x = 10;
// console.log(`${(x % 2 == 0) ? 'genap' : 'ganjil'}`);

// HTML fragments
// const mhs = {
//     nama: 'mela santika',
//     umur: 17,
//     nrp: '828282',
//     email: 'melasantika1602@gmail.com'
// };

// const el = `<div class="mhs">
// <h2>${mhs.nama}</h2>
// <span class="nrp">${mhs.nrp}</span>
// </div>`;

// console.log(el);



// 2. Looping
// const mhs = [
//     {
//         nama: 'mela',
//         email: 'melasantika1602@gmail.com'
//     },
//     {
//         nama: 'santika',
//         email: 'santika@gmail.com'
//     },
//     {
//         nama: 'lala',
//         email: 'lala@gmail.com'
//     }
// ];

// const el = `<div class="mhs">
//     ${mhs.map(m => `<ul>
//     <li>${m.nama}</li>
//     <li>${m.email}</li>

//     </ul>`).join('')}

// </div>`;






// Conditionals
// ternary
// const lagu = {
//     judul: 'tetap dalam jiwa',
//     penyanyi: 'isyana saraswati',
//     feat: 'rayi putra'
// }

// const el = `<div class="lagu">
// <ul>
//     <li>${lagu.penyanyi}</li>
//     <li>${lagu.judul} ${lagu.feat ? `(feat. ${lagu.feat})` : ''}</li>
//     </ul>
// </div>`;





// Nested
// HTML Fragments bersarang

const mhs = {
    nama: 'lala',
    semester: 8,
    mataKuliah: ['rpl', 'tkj', 'mm']
};

function cetakMataKuliah(mataKuliah) {
    return `
    <ol>
    ${mataKuliah.map(mk => `<li>${mk}</li>`).join('')}

    </ol>
    `;
}

const el = `<div class="mhs">
    <h2>${mhs.nama}</h2>
    <span class="semester">Semester : ${mhs.semester}</span>
    <h4>Mata Kuliah :</h4>
    ${cetakMataKuliah(mhs.mataKuliah)}
</div>`;

document.body.innerHTML = el;