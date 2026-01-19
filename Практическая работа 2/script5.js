const readline = require('readline-sync');
let a = Number(readline.question('Input a: '));
let b = Number(readline.question('Input b: '));
console.log((a + b)*(b - a + 1) / 2);