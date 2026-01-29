// zad 1
const number = 67;
switch (number){
    case 1:
        console.log('Январь');
        break;
    case 2:
        console.log('Февраль');
        break;
    case 3:
        console.log('Март');
        break;
    case 4:
        console.log('Апрель');
        break;
    case 5:
        console.log('Май');
        break;
    case 6:
        console.log('Июнь');
        break;
    case 7:
        console.log('Июль');
        break;
    case 8:
        console.log('Август');
        break;
    case 9:
        console.log('Сентябрь');
        break;
    case 10:
        console.log('Октябрь');
        break;
    case 11:
        console.log('Ноябрь');
        break;
    case 12:
        console.log('Декабрь');
        break;
    case 67:
        console.log('67');
        break;
    default:
        console.log('Ничего  не совпало');
    break;
}

// zad 2
const number1 = 3;
if (number1 === 1) {
    console.log('Январь');
} else if (number1 === 2) {
    console.log('Февраль');
} else if (number1 === 3) {
    console.log('Март');
} else if (number1 === 4) {
    console.log('Апрель');
} else if (number1 === 5) {
    console.log('Май');
} else if (number1 === 6) {
    console.log('Июнь');
} else if (number1 === 7) {
    console.log('Июль');
} else if (number1 === 8) {
    console.log('Август');
} else if (number1 === 9) {
    console.log('Сентябрь');
} else if (number1 === 10) {
    console.log('Октябрь');
} else if (number1 === 11) {
    console.log('Ноябрь');
} else if (number1 === 12) {
    console.log('Декабрь');
} else if (number1 === 67) {
    console.log('67');
} else {
    console.log('Ничего не совпало');
}

// zad 3
const dayNumber = 1; 
switch (dayNumber) {
    case 1:
        console.log('Понедельник: 9 уроков');
        break;
    case 2:
        console.log('Вторник: 7 уроков');
        break;
    case 3:
        console.log('Среда: 6 уроков');
        break;
    case 4:
        console.log('Четверг: 8 уроков');
        break;
    case 5:
        console.log('Пятница: 7 уроков');
        break;
    case 6:
        console.log('Выходной');
        break;
    case 7:
        console.log('Выходной');
        break;
    default:
        console.log('Ошибка: введите число от 1 до 7');
}

// zad 4
const number2 = 137;
const lastDigit = Math.floor(number2 % 10);

switch(lastDigit){
    case 0:
        console.log((0**2) % 10);
        break;
    case 1:
        console.log((1**2) % 10);
        break;
    case 2:
        console.log((2**2) % 10);
        break;
    case 3:
        console.log((3**2) % 10);
        break;
    case 4:
        console.log((4**2) % 10);
        break;
    case 5:
        console.log((5**2) % 10);
        break;
    case 6:
        console.log((6**2) % 10);
        break;
    case 7:
        console.log((7**2) % 10);
        break;
    case 8:
        console.log((8**2) % 10);
        break;
    case 9:
        console.log((9**2) % 10);
        break;
    default:
        console.log('Ошибка: это не число');
}

// zad 5
let number3 = 12345;
let count = 0
if (number3 === 0) {
    count = 1;
} else {
    let temp = number3; 
    while (temp >= 1) {
        temp = Math.floor(temp / 10); 
        count++; 
    }
}
console.log(count);