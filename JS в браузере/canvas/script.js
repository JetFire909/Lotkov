let canvas = document.querySelector('#canvas');
let context = canvas.getContext('2d');

context.fillStyle = 'black';

context.fillRect(170, 100, 60, 60); 
context.fillRect(240, 100, 60, 60); 

context.fillRect(100, 170, 60, 60); 
context.fillRect(240, 170, 60, 60); 

context.fillRect(100, 240, 60, 60); 
context.fillRect(170, 240, 60, 60); 

//

context.fillStyle = 'black';
context.fillRect(170, 100, 60, 60); 
context.fillRect(240, 100, 60, 60); 
context.fillRect(100, 170, 60, 60); 
context.fillRect(240, 170, 60, 60); 
context.fillRect(100, 240, 60, 60); 
context.fillRect(170, 240, 60, 60); 

context.fillStyle = 'black';
context.fillRect(450, 100, 200, 200);

context.fillStyle = 'white';
context.beginPath();
context.moveTo(550, 100); 
context.lineTo(650, 200); 
context.lineTo(550, 300); 
context.lineTo(450, 200); 
context.fill();

context.fillStyle = 'black';
context.beginPath();
context.moveTo(550, 140); 
context.lineTo(610, 200); 
context.lineTo(550, 260); 
context.lineTo(490, 200); 
context.fill();

//

// context.fillStyle = '#e3292e'; // Фирменный красный цвет Dota 2
// context.fillRect(100, 100, 400, 400);

// // Рисуем черные элементы логотипа
// context.fillStyle = 'black';

// context.fillRect(160, 160, 280, 50); 
// context.fillRect(210, 210, 180, 180); 
// context.fillRect(160, 340, 280, 50); 

// context.fillRect(150, 250, 90, 110); 

// context.fillRect(360, 140, 90, 110);

// context.fillStyle = '#e3292e'; 
// context.fillRect(210, 230, 60, 90); 
// context.fillRect(330, 180, 60, 90); 