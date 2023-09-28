function click(){
    const h1 = document.querySelector("h1");
    h1.innerHTML = "Título Alterado JS";
}

var h1Aletear = document.querySelector('h1');
h1Aletear.addEventListener('click', click);

//--------------------------------------------------
function click3(){
    const test = document.querySelector('.test');
    test.innerHTML = "Texto alterado";
}

var testAlterar = document.querySelector('.test');
testAlterar.addEventListener('click', click3);