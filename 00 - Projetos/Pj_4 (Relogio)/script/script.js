const hour = document.querySelector('.hour');
const minute = document.querySelector('.minute');
const sec = document.querySelector('.sec');

function newHour(){
    const newDate = new Date();
    const hr = newDate.getHours();
    const min = newDate.getMinutes();
    const s = newDate.getSeconds();

    hour.textContent = hr;
    minute.textContent = min;
    sec.textContent = s;
}

const relogio = setInterval(newHour)

