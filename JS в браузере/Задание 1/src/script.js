/* Техническое задание
Нужно запрограммировать взаимодействие с пользователем.
В разметке есть попап (класс 'popup').
Клик по кнопке «Показать подробности» (класс 'button-show') должен вызвать показ окна на странице. У попапа должен появиться класс 'popup--open'.
Клик крестику в теле попапа (класс 'button-hide') должен спрятать окно со страницы. Для этого нужно удалить класс 'popup--open' у окна.
Кроме этого, если окно на странице, а пользователь нажал клавишу ESC, попап тоже должен исчезнуть. Закрытие попапа должно срабатывать только по этой клавише, нажатие на другие клавиши не должны влиять на положение всплывающего окна.
И не забывай, что кнопка «Показать подробности» свёрстана ссылкой. Не забудь отменить переход по этой ссылке.
*/

 
// button.addEventListener('click', function() {
// alert('Клик по кнопке');
// });

// link.addEventListener('click', function(evt) {
// // Отменяем действие по умолчанию
// evt.preventDefault();
// alert('Произошёл клик');
// });

// document.addEventListener('keydown', function(evt) {
// // Проверяем, что код клавиши равен 27
// if (evt.keyCode === 27) {
// // Код отсюда выполнится только при нажатии ESC
// }
// })

const popup = document.querySelector('.popup');
const openButton = document.querySelector('.button-show');
const closeButton = document.querySelector('.button-hide');

openButton.addEventListener('click', function (evt) {
    evt.preventDefault();
    popup.classList.add('popup--open');
});

closeButton.addEventListener('click', function () {
    popup.classList.remove('popup--open');
});

window.addEventListener('keydown', function (evt) {
    if (evt.key === 'Escape') {
        if (popup.classList.contains('popup--open')) {
            evt.preventDefault();
            popup.classList.remove('popup--open');
        }
    }
});
