//1- Criar a contador; 2- Criar a condicional para o código executar; 3 - Incremetar +1 enquanto for rodando o código.
// for(let n = 0; n < 10; n++){
//  console.log('Meu código ' + n)
// }

// for (let y = 0; y <3; y++){
//     console.log(`Esse é meu contador ${y}`)
// }

var listaDeCores = ['Preto', 'Branco', 'Azul', 'Vermelho'];

for(x = 0; x < listaDeCores.length; x++){
    console.log(listaDeCores[x]);
}

var names = ['Gustavo', 'Carlos', 'Davi']
for (let contador = 0; contador < names.length; contador++){
    console.log(names[contador]);
}


var colors = ['Black', 'White'];
for(let c = 0; c < colors.length; c++){
    console.log(colors[c]);
}

for(let i in colors){
    console.log(colors[i]);
}  

names = ['Gustavo', 'Algenor', 'Marechal Deodoro'];
for (let n in names){
    console.log(names[n]);
}

for(cor of colors){
    console.log(cor);
}

