// Rest Parameter
// "Merepresentasikan argument pada function dengan jumlah yang tidak terbatas menjadi sebuah array"

// function myFunc() {
// return `a= ${a}, b =${b}, myArgs= ${myArgs}`;
// return myArgs;
// return Array.from(arguments);
//     return [...arguments];
// }

// console.log(myFunc(1, 2, 3, 4, 5));

// function jumlahkan(...angka) {
// let total = 0;
// for (const a of angka) {
//     total += a;

// }

// return total;

// return angka.reduce((a, b) => a + b);
// }

// console.log(jumlahkan(1, 2, 3, 4, 5));

// ARRAY DESCTRUCTURING
// const kelompok1 = ['mela', 'lili', 'kuku', 'kiki', 'nono'];
// const [ketua, wakil, ...anggota] = kelompok1;
// console.log(anggota);

// OBJECT DESTRUCTURING
// const team = {
//     pm: 'mela',
//     frontEnd1: 'lili',
//     frontEnd2: 'nana',
//     backend: 'kiaka',
//     ux: 'susi',
//     dexOps: 'hendra'
// }

// const { pm, ...myTeam } = team;
// console.log(myTeam);

// FILTERING
function filterBy(type, ...values) {
    return values.filter(v => typeof v === type);
}

console.log(filterBy('boolean', 1, 2, 'mela', false, 10, true, 'nini'));