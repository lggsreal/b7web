// var personagem = {
//     nome: 'Gustavo',
//     idade: 20,
//     pais: 'Brasil',
//     caracteristica: {
//         forca: 25,
//         magia: 0,
//         saude: 100
//     }
// }

// console.log(personagem);
// console.log(`Meu personagem tem o nome: ${personagem.nome}, com a idade ${personagem.idade}.`);
// console.log(`A força dele é: ${personagem.caracteristica.forca}, e ele está com a saúde no: ${personagem.caracteristica.saude}.`)

// personagem.nome = 'Agnaldo'; //Mudei o nome do objeto
// personagem.caracteristica.forca = 5;
// console.log(personagem.nome + personagem.caracteristica.forca);


//------------------------------- AULA 2
var personagem = {
    nome: 'Gustavo',
    idade: 20,
    carros: [
    {
        modelo: 'Fiat',
        cor: 'Preto'         
    },

    {
        modelo: 'Ferrari',
        cor: 'Amarelo'         
    }
    ]
}

console.log(personagem.carros[0].cor);
console.log(personagem.carros[1].modelo);

//-------------------------------------- AULA 3  (FUNÇÕES DENTRO DE UM OBJETO)
var pessoa = {
    nome: 'Gustavo',
    sobrenome: 'Gomes',
    idade: 20,
    nomeCompleto: function(){
        return `${this.nome} ${this.sobrenome}`
    }
}

console.log(pessoa.nomeCompleto());