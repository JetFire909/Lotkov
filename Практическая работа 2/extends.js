class Animal  {
    constructor(name) {
        this.name = name
    }
    eat(meal) {
        this.meal = meal;
        console.log('Я ем ' + this.meal);
    }
}
class Bear extends Animal{
    constructor(name, weight, speed) {
        super(name);
        this.weight = weight;
        this.speed = speed;
    }   
    run(speed) {
        console.log(`Медведь бежит со скорость ${this.speed} км/ч и вешу ${this.weight} кг.`);
    }
}
let bear = new Bear("Медведь", 400, 80);
bear.eat('Мясо');
bear.run();

// task #2
class Shape {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
    perimeter() { 
        return null;
    }
    area() {
        return null; 
    }
    String() {
        return "Это базовая фигура";
    }
    move() {
        this.x += 10; 
        this.y += 10;
        console.log('Фигура переместилась');
    }
}

class Rectangle extends Shape {
    constructor(x, y, width, height) {
        super(x, y);
        this.width = width;
        this.height = height;
    }
    perimeter() {
        return 'Периметр равен: ' + (this.width + this.height) * 2;
    }
    area() {
        return 'Площадь равна: ' + (this.width * this.height);
    }
    String() {
        return "Это Прямоугольник";
    }
}

class Square extends Rectangle {
    constructor(x, y, length) {
        super(x, y, length, length);
        this.length = length;
    }
    perimeter() {
        let baseValue = super.perimeter(); 
        return 'Квадрат: ' + (this.length * 4);
    }
    area() {
        return 'Площадь квадрата: ' + (this.length ** 2);
    }
    String() {
        return "Это Квадрат";
    }
}

class Circle extends Shape {
    constructor(x, y, radius) {
        super(x, y);
        this.radius = radius;
    }
    perimeter() {
        return 'Длина окружности равна: ' + (2 * 3.14 * this.radius);
    }
    area() {
        return 'Площадь круга: ' + (3.14 * this.radius ** 2);
    }
    String() {
        return "Это Круг";
    }
}

let myCircle = new Circle(0, 0, 10);
console.log(myCircle.String()); 
console.log(myCircle.perimeter()); 

const rect = new Rectangle(10, 10, 20, 30);
const sq = new Square(5, 5, 15);
const circ = new Circle(0, 0, 10);
// num 7
const shapes = [rect, sq, circ];
// num 8
shapes.forEach(shape => {
    console.log(`Тип: ${shape.String()}`);
    console.log(shape.perimeter());
    console.log(shape.area());
    console.log('---');
});

// num 9
class Triangle extends Shape {
    #a; #b; #c; 
    constructor(x, y, a, b, c) {
        super(x, y);
        this.#a = a;
        this.#b = b;
        this.#c = c;
    }
    perimeter() {
        return 'Периметр треугольника: ' + (this.#a + this.#b + this.#c);
    }
    area() {
        // Формула Герона
        const p = (this.#a + this.#b + this.#c) / 2;
        const s = Math.sqrt(p * (p - this.#a) * (p - this.#b) * (p - this.#c));
        return 'Площадь треугольника: ' + s.toFixed(2);
    }
    String() {
        return "Это Треугольник";
    }
}

const tri = new Triangle(0, 0, 3, 4, 5);
console.log(tri.String());
console.log(tri.perimeter());
console.log(tri.area());