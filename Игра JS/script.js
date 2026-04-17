const igrokEl = document.getElementById('igrok');
const begunokEl = document.getElementById('begunok');
const krugiTekst = document.getElementById('krugi');
const skorostTekst = document.getElementById('skorost');
const mestoTekst = document.getElementById('mesto');

const centrX = 500;
const centrY = 350;
const rX = 420; 
const rY = 280; 

let ugolIgroka = 4.7;
let skorostIgroka = 0;
let krugiIgroka = 0;
let prosholPolovinu = false;
let igraIdet = true;

let begunokPoziciya = 0;
let begunokNapravlenie = 9;

const boti = [
    { el: document.getElementById('bot1'), ugol: 4.8, skorost: 0.015, krugi: 0, otstup: 35 },
    { el: document.getElementById('bot2'), ugol: 4.9, skorost: 0.013, krugi: 0, otstup: -35 },
    { el: document.getElementById('bot3'), ugol: 5.0, skorost: 0.017, krugi: 0, otstup: 70 }
];

function risovatTrassu() {
    const canvas = document.getElementById('trassa');
    const ctx = canvas.getContext('2d');
    
    // Основной асфальт
    ctx.lineWidth = 180;
    ctx.strokeStyle = "#333";
    ctx.beginPath();
    ctx.ellipse(centrX, centrY, rX, rY, 0, 0, Math.PI * 2);
    ctx.stroke();

    // Края дороги 
    ctx.lineWidth = 2;
    ctx.strokeStyle = "#fff";
    ctx.beginPath();
    ctx.ellipse(centrX, centrY, rX + 90, rY + 90, 0, 0, Math.PI * 2);
    ctx.stroke();
    ctx.beginPath();
    ctx.ellipse(centrX, centrY, rX - 90, rY - 90, 0, 0, Math.PI * 2);
    ctx.stroke();

    // Разметка посередине 
    ctx.setLineDash([20, 20]);
    ctx.lineWidth = 2;
    ctx.strokeStyle = "#999";
    ctx.beginPath();
    ctx.ellipse(centrX, centrY, rX, rY, 0, 0, Math.PI * 2);
    ctx.stroke();
    ctx.setLineDash([]);

    // Финишная черта 
    ctx.fillStyle = "white";
    ctx.fillRect(centrX - 2, centrY - rY - 90, 4, 180);
}

function obnovit() {
    if (!igraIdet) return;

    begunokPoziciya += begunokNapravlenie;
    if (begunokPoziciya >= 392 || begunokPoziciya <= 0) begunokNapravlenie *= -1;
    begunokEl.style.left = begunokPoziciya + 'px';

    ugolIgroka += skorostIgroka;
    skorostIgroka *= 0.985;
    razmestit(igrokEl, ugolIgroka, 0);
    skorostTekst.textContent = Math.round(skorostIgroka * 5000);

    if (ugolIgroka > 0 && ugolIgroka < 3 && !prosholPolovinu) prosholPolovinu = true;
    if (ugolIgroka > 6.28) {
        if (prosholPolovinu) {
            krugiIgroka++;
            prosholPolovinu = false;
        }
        ugolIgroka = 0;
        krugiTekst.textContent = krugiIgroka + "/10";
        if (krugiIgroka >= 10) finish(true);
    }

    boti.forEach(bot => {
        bot.ugol += bot.skorost;
        if (bot.ugol > 6.28) {
            bot.ugol = 0;
            bot.krugi++;
            if (bot.krugi >= 10) finish(false);
        }
        razmestit(bot.el, bot.ugol, bot.otstup);
    });

    const m = [{i:'p', p: krugiIgroka*7+ugolIgroka}, ...boti.map((b,idx)=>({i:idx, p: b.krugi*7+b.ugol}))];
    m.sort((a,b) => b.p - a.p);
    mestoTekst.textContent = m.findIndex(r => r.i === 'p') + 1;

    requestAnimationFrame(obnovit);
}

function razmestit(el, ugol, otstup) {
    const x = centrX + Math.cos(ugol) * (rX + otstup) - 17;
    const y = centrY + Math.sin(ugol) * (rY + otstup) - 9;
    el.style.left = x + 'px';
    el.style.top = y + 'px';
    el.style.transform = `rotate(${ugol + 1.57}rad)`;
}

function finish(win) {
    igraIdet = false;
    alert(win ? "ПОБЕДА!" : "ПОРАЖЕНИЕ!");
    location.reload();
}

window.addEventListener('keydown', (e) => {
    if (e.code === 'Space' && igraIdet) {
        if (begunokPoziciya >= 140 && begunokPoziciya <= 260) {
            skorostIgroka += 0.02;
            igrokEl.style.filter = "brightness(2)";
            setTimeout(() => igrokEl.style.filter = "none", 100);
        } else {
            skorostIgroka *= 0.75;
        }
    }
});

risovatTrassu();
obnovit();
