class Animal {
    constructor(name) {
        this.name = name
    }
    eat(meal) {
        this.meal = meal;
        console.log('Я ем ' + this.meal);
    }
}
animal = new Animal('Кролик');
animal.eat('Морковка');
class Fish extends Animal {
    constructor(name, depht, speed) {
        super(name);
        this.depht = depht;
        this.speed = speed;
    }
    swim(depht, speed) {
        console.log(`Я плаваю на гулбине ${this.depht} со скоростью ${this.speed}`);
    }
    eat(meal) {
        super.eat(meal);
        console.log('Я ем 5 раз в сутки моя еда ' + this.meal);
    }
}
class Bird extends Animal {
    eat(meal) {
        this.meal = meal;
        console.log(`Привет! я птичка питаюсь ${this.meal}`);
    }
}
let fish = new Fish('Карась', 3, 15);
// fish.eat(червяки);
// fish.swim();
let pigeon = new Bird('Голубь');
let animals = [fish,pigeon];
for(let i = 0; i < animals.length; i++){
    animals[i].eat('еду');
}