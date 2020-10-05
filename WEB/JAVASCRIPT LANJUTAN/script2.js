// 2.1 EXECUTION CONTEXT, HOISTING & SCOPE

// console.log(nama);
// var nama = 'mela';

// creation phase pada Global Context
// nama var = undefined
// nama function = function()
// konsep ini disebut hoisting
// window = global object
// this = window



// execution phase
// var nama = 'mela';
// var umur = 33;
// console.log(sayHello());

// function membuat local Execution Context
// yang didalamnya terdapat creation dan execution phase
// bisa akses :
// window
// arguments
// hoisting
// function sayHello() {
//     return (`Halo, nama saya ${nama}, saya ${umur} tahun.`);
// }


// var nama = 'Mela Santika';
// var username = '@melacantika2';

// function cetakURL(username) {
//     var instagramURL = 'http://instagram.com/';
//     return instagramURL + username;
// }

// console.log(cetakURL(username));

// function a() {
//     console.log('ini a');

//     function b() {
//         console.log('ini b');

//         function c() {
//             console.log('ini c');
//         }
//         c();
//     }
//     b();
// }
// a();

function satu() {
    var nama = 'mela';
    console.log(nama);
}

function dua() {
    console.log(nama);
}

console.log(nama);
var nama = 'lala';
satu();
dua('susi');
console.log(nama);