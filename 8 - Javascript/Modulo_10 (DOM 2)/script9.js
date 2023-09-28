let timer;

function start(){
    timer = setInterval(showTime, 1000);
}

function stop(){
    clearInterval(timer)
}


function showTime(){
    let d = new Date();
    let h = d.getHours();
    let m = d.getMinutes();
    let s = d.getSeconds();

    let hour = `${h}:${m}:${s}`;
    document.querySelector(".demo").textContent = hour;

}

