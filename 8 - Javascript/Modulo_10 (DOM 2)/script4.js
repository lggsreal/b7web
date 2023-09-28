var nome = "Luiz Gustavo Gomes da Silva"
console.log(nome.length); //Quantidade de caracteres
console.log(nome.indexOf('L')); //Ver a posição do caractere 
console.log(typeof nome); //Verificar qual tipop de informação (String, Number, Boolean)
console.log(nome.slice(0, 12)); //Da onte até aonde na strinb
console.log(nome.substring(0, 12));  //funciona ao contrário também (com numero negativo)
console.log(nome.substr(0, 3)); //Parâmetro 1 onde começa; Parâmetro 2 quantos andam

var texto = "Esse é o meu texto"; 
console.log(texto.replace('texto', 'nome')); //Subsituir uma parte do texto
console.log(texto.toUpperCase()); //Texto todo maiusculo
console.log(texto.toLowerCase()); //Texto todo minusculo


var test2 = "               Agnaldo           ";
console.log(test2.trim()); //Tirar o espaço desnecessário da String

var test3 = "Gustavo";
console.log(test3.charAt(2)); //Mostrar o caracter nessa posição
console.log(test3[2]); //Mostrar o caractere nessa posição

var test4 = "Farofa de ovo";
console.log(test4.split(' '));  //Criar array separando por um caractere definido nessa função