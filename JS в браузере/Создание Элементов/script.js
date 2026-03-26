// const { createElement } = require("react");

const articles = document.querySelector('.articles');

const card = document.createElement('li');

const header = document.createElement('h2');
header.textContent = 'Статья о JS';
card.appendChild(header)
const img = document.createElement('img');
img.src = 'photo_2021-05-04_11-38-39-1.jpg';
img.alt = 'Ancient';
img.style.width = '250px';
card.appendChild(img);
const text = document.createElement('p');
text.textContent = 'JavaScript (JS) — это высокоуровневый, интерпретируемый язык программирования, который делает веб-страницы интерактивными и «живыми». Он обеспечивает работу динамического контента, анимаций, всплывающих окон и обновлений данных без перезагрузки страницы. JS используется как во фронтенде (в браузере), так и в бэкенде (через Node.js)';
card.appendChild(text);
const hr = document.createElement('hr');
card.appendChild(hr);
articles.appendChild(card);

const card2 = document.createElement('li');

const text2 = document.createElement('p');
text2.textContent = 'SixSeven';
card2.appendChild(text2);
SixSeven.appendChild(card2);
