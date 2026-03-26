const animal = [
    ['Муринский лев', 80, 'газели Берданки'],
    ['Олень', 60, 'трава'],
    ['Антилопа', 90, 'побеги'],
    ['Леопард', 58, 'копытные'],
    ['Гепард', 110, 'газели Томсона'],
];

class Animal {
    #name;
    #speed;
    #food;
    constructor(name, speed, food) {
        this.#name = name;
        this.#speed = speed;
        this.#food = food;
    }
    // 
    getName() { return this.#name; }
    getSpeed() { return this.#speed; }
    getFood() { return this.#food; }
    //
    setName(newName) { this.#name = newName; }
    setSpeed(newSpeed) { this.#speed = newSpeed; }
    setFood(newFood) { this.#food = newFood; }
    run() {
        return 'Меня зовут ' + this.#name + ' у меня скорость ' + this.#speed;
    }
    eat() {
        return 'Меня зовут ' + this.#name + ' я ем ' + this.#food;
    }
}
let newObj = [];
for (let i = 0; i < animal.length; i++) {
    let item = new Animal(animal[i][0], animal[i][1], animal[i][2]);
    newObj.push(item);
}
newObj[0].setName('Золотой лев');
newObj[0].setSpeed(100);
for (let i = 0; i < newObj.length; i++) {
    console.log('Имя из геттера: ' + newObj[i].getName()); 
    console.log(newObj[i].eat());
}
