const animal = [
    ['Муринский лев',80,'газели Берданки'],
    ['Олень',60,'трава'],
    ['Антилопа',90,'побеги'],
    ['Леопард',58,'копытные'],
    ['Гепард',110,'газели Томсона'],
]
function Animal(name, speed, food) {
    this.name = name;
    this.speed = speed;
    this.food = food;
    this.run = function() {
        return ('Меня зовут ' + this.name + ' у меня скорость ' + this.speed);
    }
    this.eat = function() {
        return ('Меня зовут ' + this.name + ' я ем ' + this.food);
    }
}
let newObj = [];
for(let i = 0; i < animal.length; i++) {
    newObj.push(new Animal(animal[i][0], animal[i][1], animal[i][2]));
}
for(let i = 0; i < animal.length; i++){
    console.log(newObj[i].name);
    console.log(newObj[i].run());
    console.log(newObj[i].eat());
}
// Задание №2
const readline = require('readline-sync');
function Calculator(){
    this.read = function() {
        this.a = Number(readline.question('Input a: '));
        this.b = Number(readline.question('Input b: '));
    }
    this.sum = function() {
        return this.a + this.b;
    }
    this.mul = function(){
        return this.a * this.b;
    }
    this.pow = function(){
        return this.a ** this.b;
    }
}
let calculator = new Calculator();
calculator.read();
console.log('Sum=' + calculator.sum() );
console.log('Mul=' + calculator.mul() );
console.log('Pow=' + calculator.pow() );

// Задание 3
  