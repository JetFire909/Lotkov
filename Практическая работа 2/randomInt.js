// let n = '22';
// let num = Number(n);

// let x = 2.34;
// Math.floor(x);
// Math.round(x);
// console.log(x.toPrecision());
// Math.random();


// const readline = require('readline-sync');
// let min = Number(readline.question('Input min: '));
// let max = Number(readline.question('Input max: '));
function randomInt(min = 0, max){
    return (Math.random() * (max -min + 1)) + min;
}
// return Math.floor(Math.random() * (max -min + 1)) + min;
// }
console.log(randomInt(0, 67))
