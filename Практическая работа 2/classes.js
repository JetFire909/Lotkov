// zad 1
const animal = [
    ['Муринский лев', 80, '`газели Берданк`и'],
    ['Олень', 60, 'трава'],
    ['Антилопа', 90, 'побеги'],
    ['Леопард', 58, 'копытные'],
    ['Гепард', 110, 'газели Томсона'],
];
class Animal {
    constructor(name, speed, food) {
        this.name = name;
        this.speed = speed;
        this.food = food;
    }  
    run() {
        return 'Меня зовут ' + this.name + ' у меня скорость ' + this.speed;
    }
    eat() {
        return 'Меня зовут ' + this.name + ' я ем ' + this.food;
    }
}
let newObj = [];
for (let i = 0; i < animal.length; i++) {
    let item = new Animal(animal[i][0], animal[i][1], animal[i][2]);
    newObj.push(item);
}
for (let i = 0; i < newObj.length; i++) {
    console.log(newObj[i].name);
    console.log(newObj[i].run());
    console.log(newObj[i].eat());
}

// zad 2
const readline = require('readline-sync');
class Calculator {
    constructor() {
        this.a = 0;
        this.b = 0;
    }
    read() {
        this.a = Number(readline.question('Input a: '));
        this.b = Number(readline.question('Input b: '));
    }
    sum() {
        return this.a + this.b;
    }
    mul() {
        return this.a * this.b;
    }
    pow() {
        return this.a ** this.b;
    }
}
const calculator = new Calculator();
calculator.read();
console.log('Sum=' + calculator.sum());
console.log('Mul=' + calculator.mul());
console.log('Pow=' + calculator.pow());

// zad 3
