// // let n = '22';
// // let num = Number(n);

// // let x = 2.34;
// // Math.floor(x);
// // Math.round(x);
// // console.log(x.toPrecision());
// // Math.random();

// const readline = require('readline-sync');
// // let min = Number(readline.question('Input min: '));
// // let max = Number(readline.question('Input max: '));
// function randomInt(min = 0, max){
//     return (Math.random() * (max -min + 1)) + min;
// }
// // return Math.floor(Math.random() * (max -min + 1)) + min;
// // }
// console.log(randomInt(18, 67));

// zad 1
function randomIntArray(minLen, maxLen, minVal, maxVal) {
    const length = Math.floor(Math.random() * (maxLen - minLen + 1)) + minLen;
    const result = [];
    for (let i = 0; i < length; i++) {
        const randomNum = Math.floor(Math.random() * (maxVal - minVal + 1)) + minVal;
        result.push(randomNum);
    }
    return result;
}
const myArr = randomIntArray(1, 10, 20, 67);
console.log(myArr);

// zad 2
console.log("Элементы с 1 по 10:");
for (let i = 0; i < 10; i++) {
    console.log(`Элемент ${i + 1}: ${myArr[i]}`);
}
console.log("Последний элемент:", myArr[myArr.length - 1]);
console.log("Весь массив:" , myArr.join(", "));

// zad 3
const everySecondArr = [];
 for (let i = 1; i < myArr.length; i += 2) {
    everySecondArr.push(myArr[i]);
}
console.log("Массив из каждого второго элемента:", everySecondArr.join(", "));