//zad 1
'use strict';
const readline = require('readline-sync');
function inputArray() {
    let size = Number(readline.question('Input array dimension: '));
    let newArray = [];
    for (let i = 0; i < size; i++) {
        let value = readline.question(`Input element: `);
        while (isNaN(value)) {
            console.log("Введите число!");
            value = readline.question(`Input element: `);
        }
        newArray.push(Number(value)); 
    }
    return newArray;
}
// console.log(inputArray());

// zad 2
function maxInTheArray(arr) {
    if (arr.length === 0) return false;
    let max = arr[0];
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] > max) max = arr[i];
    }
    return max;
}

function minInTheArray(arr) {
    if (arr.length === 0) return false;
    let min = arr[0];
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] < min) min = arr[i];
    }
    return min;
}

// zad 3
function meanToDigit(arr){
    let sum = 0;
    for (let i = 0; i < arr.length; i++){
        let num = arr[i];
        if(num >= 10 && num <= 99){
            sum = sum + num;
        }
    }
    return sum / arr.length;
}

const myArr = inputArray();
const maxVal = maxInTheArray(myArr);
const minVal = minInTheArray(myArr);

console.log("Максимум:", maxVal);
console.log("Минимум:", minVal);
console.log(meanToDigit(myArr));
