// let array = [4, 5, 34, 'Даниил Смаев', true];
// let count = array.length
// array[count-1] = 'Фантомас';
// array[8] = 44;
// array.push(55);
// console.log(array);

// zad 1
// let liquids = ['вода', 'молоко', 'сок', 'чай', 'йогурт'];
// let fruits = ['киви', 'банан', 'персик', 'манго', 'груша', 'ананас'];
// let greens = ['мята', 'шпинат', 'руккола', 'петрушка', 'базилик'];

// const readline = require('readline-sync');
// let chosenLiquid = Number(readline.question('Input Liquid: '));
// let chosenFruit = Number(readline.question('Input Fruit: '));;
// let chosenGreen = Number(readline.question('Input Green: '));;

// let order = 'Основа - ' + liquids[chosenLiquid ] +
//             ', Фрукт - ' + fruits[chosenFruit ] +
//             ', Зелень - ' + greens[chosenGreen ];
// console.log(order)

// zad 2
let groceries = ['чай', 'шпроты', 'печенье', 'сахар', 'чипсы'];
let shoppingList = '';
for(let  i = 1; i < groceries.length; i++){
    shoppingList = shoppingList + groceries[i]  + ', ';
}
console.log(shoppingList);

// zad 3
n = 45;

