"use strict"

let cvs = document.querySelector('#canvas');
let ctx = cvs.getContext('2d')

let bird = new Image();
let bg = new Image();
let fg = new Image();
let pipeUp = new Image();
let pipeBottom = new Image();

let score = 0;
let gap = 100;

// Позиция птички
let xPos = 10;
let yPos = 280;
let grav = 1.2;

let fly = new Audio();  
let score_audio = new Audio();
fly.src = 'audio/fly.mp3'
score_audio.src = 'audio/dva.mp3'

bird.src = 'img/bird.png';
fg.src = 'img/fg.png';
bg.src = 'img/bg.png';
pipeUp.src = 'img/pipeUp.png';
pipeBottom.src = 'img/pipeBottom.png';

document.addEventListener("keydown", function(e){
    console.log(e.key);
    if(e.key == ' '){
    yPos -= 32;
    fly.play();
    }
});  

let pipe = [];
pipe[0] = {
    x : cvs.width,
    y : 0
}

function draw(){
    ctx.drawImage(bg, 0, 0)

    for(let i = 0; i < pipe.length; i++){
        ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
        ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);      
        pipe[i].x --;
        
        if(pipe[i].x == 125){
            pipe.push({
                x : cvs.width,
                y : Math.floor(Math.random() * pipeUp.height) - pipeUp.height
            });
        }
        if(xPos + bird.width >= pipe[i].x && xPos <=pipe[i].x + pipeUp.width && (yPos <= pipe[i].y + pipeUp.height || yPos + bird.height >= pipe[i].y + pipeUp.height + gap)){
            location.reload(); // game over
        }

        if(pipe[i].x == 5){
            score ++;
            score_audio.play();
        }
    }

    // ctx.drawImage(pipeUp, 100, 0)
    // ctx.drawImage(pipeBottom, 100, 0 + pipeUp.height + gap);

    ctx.drawImage(fg, 0, cvs.height - fg.height);
    ctx.drawImage(bird, xPos, yPos);

    yPos += grav;

    if (yPos + bird.height >= cvs.height - fg.height) {
        location.reload();
    }

    ctx.fillStyle = '#000';
    ctx.font = '24px Verdana'
    ctx.fillText('Счет: ' + score, 10, cvs.height - 20)
    requestAnimationFrame(draw);
}

pipeBottom.onload = draw;