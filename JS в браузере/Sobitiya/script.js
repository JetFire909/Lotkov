const button = document.querySelector('button')
const p = document.querySelector('p')

button.addEventListener('click', function(){
    p.textContent = 'Что то другое';
});

document.addEventListener('keydown', function(event){
    // alert('Нажали кнопку');
    if(event.key == "1"){
        p.textContent = 'Нажали клавишу 1';
    }
    if(event.key == "2"){
        p.textContent = 'Нажали клавишу 2';
    }
    // console.log(event)
});