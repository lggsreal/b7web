let lista = ['Ovo', 'Farinha', 'Macarrão', 'Açaí'];
let res = lista.toString(); //Transformasr em string um array
console.log(res);

res = lista.join('-'); //Juntar o array em uma string separando pelo parâmetro do Join
console.log(res);

res = lista.indexOf('Macarrão'); //Mostrar a posição do item no array
console.log(res);


let lista2 = ['Salsicha', 'Pão'];
lista2.shift() //Remover o primeiro item do array;
lista2.pop(); //Remover o ultimo item da lista;
lista2.push('Item adiciondo no array'); //Função para dicionar item no array
lista2[0] = "Adicionado e modificaado";
let res2 = lista2;
console.log(res2);

let list3 = ['Ovo', 'Abacaxi', 'Cenoura'];
list3.splice(1, 1); //Parâmetro 1 ondecomeça a remover o item, parãmetro 2 até onde remove
let res3 = list3;
console.log(res3);


let lista4 = lista.concat(lista2); //Contatena dois arrays
lista4.sort(); //Odernou o array em ordem alfabética

lista4.sort();   //Ordem alfabética
lista4.reverse(); //Inverteu o array
console.log(lista4);



// Lista mapeada 
let lista5 = [1, 33, 55, 43, 67, 4];
let lista6 = [];

lista6 = lista5.map(function(item){
    return item * 2;
});
console.log(lista6);


let lista7 = [2, 44, 33, 55, 88];
let lista8 = [];

lista8 = lista7.map(function(item2){
    return item2 * 3;
});
console.log(lista8);
/////////////



//Retornar apenas itens especificios
let lista9 = [1, 4, 5];
let res9 = lista9.filter(function(item3){
    if (item3 < 4){
        return true;
    }else{
        return false;
    }
});

console.log(res9);


// Verificar se todos tão ok ou não:
let lista10 = [2, 4, 5, 7, 33];
let res10 = lista10.every(function(item10){
    if (item10 < 34){
        return true;
    }else{
        return false;
    }
})

console.log(res10);


// Procurar algo no array;
let lista11 = [1,2,3];
let res11 = lista11.find(function(item11){
    if(item11 == 3){
        return true;
    }else{
        return false;
    }
})

console.log(res11);


// Encontrar a posição de algum item 
let lista12 = [1,2,3];
let res12 = lista12.indexOf(function(item12){
    if(item12 == 3){
        return true;
    }else{
        return false;
    }
})

console.log(res12);


// Test find;
lista13 = [
    {nome: "Gustavo", idade: 12},
    {nome: "Agnaldo", idade: 52},
    {nome: "Stefany", idade: 22}
]

let res13 = lista13.find(function(item13){
    if(item13.nome == "Gustavo"){
        return true;
    }else{
        return false;
    }
});

console.log(res13);


// Test find2:
let lista14 = [
    {id: 2332, age: 15},
    {id: 2365, age: 17},
    {id: 6757, age: 19}
]

let res14 = lista14.find(function(item14){
    if (item14.id == 2332){
        return true;
    }
    else{
        return false;
    }
})

console.log(res14);
