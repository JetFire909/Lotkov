let template = document.querySelector('#template');
const content = template.content
let cards = document.querySelector('.cards');
let card = template.cloneNode(true);
cards.appendChild(card);
card.querySelector('h2').textContent = 'Статья о вотч демо';
card.querySelector('img').src = 'image2.jpg';
card.querySelector('p').textContent = 'Содержание';
card.querySelector('button').addEventListener('click', function(){
    card.remove();
})
cards.appendChild(card);