//Texto digitado
let messegeDigit = document.querySelector('.messege-digit');
let textOne = "Olá";
let textTwo = "Sou programador Front-End";

function textWrite(el){
    const textArray = el.innerHTML.split('');
    el.innerHTML = "";

    textArray.forEach((letra, i) => {
        setTimeout(function (){
            el.innerHTML += letra;
        }, 110 * i)
    });
}

function digit(){
    messegeDigit.innerHTML = textOne
    textWrite(messegeDigit);

    setTimeout(() => {
        messegeDigit.textContent = "";
        messegeDigit.textContent = textTwo;
        textWrite(messegeDigit)
    }, 10 * 200)
}

setTimeout(digit, 1500)


//MENU RESPONSIVO
function addRemoveMenu(){
    let menuMobile = document.querySelector('.menu-mobile');
    let img = document.querySelector(".mobile-icon");

    if(menuMobile.classList.contains('addMenu')){
        menuMobile.classList.remove('addMenu');
        menuMobile.classList.add('removeMenu')
        img.setAttribute('src', 'script/menu-icon.png');
        
    }
    else if(menuMobile.classList.contains('removeMenu')){
        menuMobile.classList.remove('removeMenu');
        menuMobile.classList.add("addMenu");
        img.setAttribute('src', 'script/menuexist-icon.png');
    }
}