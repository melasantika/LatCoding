// Tagged templates Literal: bentuk yang lebih kompleks  dari template literals, memungkinkan kita untuk membaca template literals melalui sebuah function.

// const nama = 'mela';
// const umur = 17;

// function coba(strings, ...values) {
//     // let result = '';
//     // strings.forEach((str, i) => {
//     //     result += `${str}${values[i] || ''}`;
//     // });
//     // return result;

//     return strings.reduce((result, str, i) => `${result}${str}${values[i] || ''}`, '');
// }

// const str = coba`Halo, nama saya ${nama}, saya ${umur} tahun.`;
// console.log(str);


// Highlight
const nama = 'mela';
const umur = 17;
const email = 'mela@gmail.com';

function highlight(strings, ...values) {
    return strings.reduce((result, str, i) => `${result}${str}<span class="hl">${values[i] || ''}</span>`, '');
}

const str = highlight`Halo, nama saya ${nama}, saya ${umur} tahun, dan email saya adalah : ${email}.`;

document.body.innerHTML = str;


// PENGGUNAAN LAIN TAGGED TEMPLATE
// 1. Escaping HTML TimeRanges
// 2. Translation & Internationalization
// 3. Styled Components