// function click(){
//     const p = document.querySelector('p');
//     p.style.backgroundColor = "#00F";
//     p.style.color = "white";
//     p.style.fontSize = "30px";
// }

// var pChange = document.querySelector('p');
// pChange.addEventListener('click', click);

//---------------- CRIANDO CLASSES -----------------------
function click2(){
    const p = document.querySelector('p');
    p.classList.add('.azul');

    const azul = document.querySelector('.azul');
    azul.style.color = "blue";
}

var changeP = document.querySelector('.azul');
changeP.addEventListener('click', click2);

