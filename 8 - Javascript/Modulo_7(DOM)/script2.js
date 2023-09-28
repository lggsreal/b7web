function click(){
    const strong = document.querySelector('strong');
    strong.innerHTML = strongAlterar.innerHTML + 'Alterei meu strong';
}

var strongAlterar = document.querySelector('strong');
strongAlterar.addEventListener('click', click);
//------------------------------------------------------

function click2(){
    const li = document.querySelector('li');
    li.innerHTML = "Alterei";
    const ul = document.querySelector('ul');
    ul.children[0].append(', Adicionado via JS');

    let newLI = document.createElement('li');
    newLI.innerHTML = 'Item adicionado';

    ul.appendChild(newLI);
    ul.prepend(newLI);
}

var liAlterar = document.querySelector('li');
liAlterar.addEventListener('click', click2);
//------------------------------------------------------

