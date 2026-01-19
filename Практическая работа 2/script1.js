const readline = require('readline-sync');
let a = Number(readline.question('Input a: '));
let b = Number(readline.question('Input b: '));
// let a = 800;
// let b = 4;
let s = a * b;
if (s > 500){
    console.log(s * 0.9);
}else{
    console.log(s)
}