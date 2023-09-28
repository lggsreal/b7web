function click(){
    const ul = document.querySelector('ul');
    ul.children[0].innerHTML = "Alterado pelo Javascript";
    ul.children[1].innerHTML = "Alterado pelo Javascript";

    for(i = 0; i < 7; i++){
        const p = document.createElement('p');
        p.innerHTML = "Esse são os meus paragráfos: " + i;
        ul.before(p);
    }
}


var ulClick = document.querySelector('ul');
ulClick.addEventListener('click', click);