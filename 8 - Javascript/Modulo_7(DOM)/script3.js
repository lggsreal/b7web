// function clickUl(){
//     const ul = document.querySelector('ul');
//     ul.children[0].append(' (Adicionei)');

//     const bottom = document.createElement('button');
//     bottom.innerHTML = "Botão";
//     ul.after(bottom); 

//     for(i = 0; i < 4; i++){
//         const bottom = document.createElement('button');
//         bottom.innerHTML = "Botão";
//         ul.after(bottom); 
//     }

// }

// var ulAlterar = document.querySelector('ul');
// ulAlterar.addEventListener('click', clickUl);


function click(){
    const ul = document.querySelector('ul');
    ul.children[1].append(' Adiciondo');

    for(i = 0; i < 4; i++){
        const li = document.createElement('li');
        li.innerHTML = 'Meu elemento: ' + i;

        ul.append(li);
    }
}

var ulClick = document.querySelector('ul');
ulClick.addEventListener('click', click);

