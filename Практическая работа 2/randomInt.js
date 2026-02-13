// let n = '22';
// let num = Number(n);

// let x = 2.34;
// Math.floor(x);
// Math.round(x);
// console.log(x.toPrecision());
// Math.random();


const readline = require('readline-sync');
// let min = Number(readline.question('Input min: '));
// let max = Number(readline.question('Input max: '));
// function randomInt(min = 0, max){
//     return (Math.random() * (max -min + 1)) + min;
// }
// return Math.floor(Math.random() * (max -min + 1)) + min;
// }
// console.log(randomInt(0, 67))

// zad 1
let min = Number(readline.question('Input min: '));
let max = Number(readline.question('Input max: '));
let minLenght = Number(readline.question('Input minLenght: '));
let maxLenght = Number(readline.question('Input maxLenght: '));
function randomIntArray() {
    let arr = [];
    const lenght = Math.floor(Math.random() * (maxLenght - minLenght + 1)) + minLenght;
    for(let i = 0; i<lenght; i++) {
        const randomNum = Math.floor(Math.random()*(max-min+1)) + min;
        arr.push(randomNum);
    }
    return arr;
}
const myArr = randomIntArray();
console.log(myArr);

// zad 2