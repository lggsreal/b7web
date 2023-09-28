// A U L A 1  (declarar função)
// var funcao = function gravidade(){
//     console.log('A gravidade do plaeta é: ');
//     console.log(9.8);
// }
// console.log(funcao);


// function teste(n1, n2){
//     var resultado = n1 + n2;
//     console.log(`O resutltado é ${resultado}`);
// }
// teste(3, 9);


// function food(f1, f2, f3, f4){
//     console.log(`Essas são as opções de comidas: ${f1}, ${f2}, ${f3}, ${f4}`);
// }

// food('Açaí', 'Maniçoba', 'Bacalhau', 'Lasanha');




// A U L A 2  (RETORNO)
// function nomeCompleto(name1, name2){
//     return`${name1} ${name2}`;
// }

// var complete = nomeCompleto('Gustavo', 'Gomes');
// console.log(complete);


// //---------------------------------------------------
// function alimentos(ali1, ali2, ali3){
//     return(`${ali1} ${ali2} ${ali3}`);
// }

// var alimentosCompleto = alimentos('Maniçoba', 'Arroz paraense', 'Açaí');
// console.log(alimentosCompleto);

// //----------------------------------------------------
// function idadeReal(idade){
//     if (idade >= 18){
//         return('Você é maior de idade.');
//     }
//     else{
//         return('Você é menor de idade.');
//     }
// }

// var idadeCompleta = idadeReal(76);
// console.log(idadeCompleta);
// //-----------------------------------------------------------

// function sexo(sex){
//     if (sex == "Masculino"){
//         return('Você tem o sexo masculino.');
//     } 
//     else if (sex == 'Feminino'){
//         return('Você tem o sexo feminino.');
//     }
//     else{
//         return('Escolha um sexo válido.');
//     }    
// }

// var sexoResposta = sexo("Masculino");
// console.log(sexoResposta);

// var sexoResposta = sexo("Feminino");
// console.log(sexoResposta);

// var sexoResposta = sexo("outro");
// console.log(sexoResposta);

// function sexoEscolha(sexo){
//     console.log(sexo);
// }

// sexoEscolha('Masculino');
// sexoEscolha('Feminino');


// E X T E R N O:
const myName = 'Gustavo';
const idade = 20;

function printData(){
    console.log('Nome: ' + myName);
    console.log('Idade: ' + idade);
}

printData();

//----------------------------------
function sum(number1, number2){
    console.log(number1 + number2);
}

sum(2, 6);

//-----------------------------------
var ageGustavo = 20;
var ageCarlos = 44;

function age(age1, age2){
    console.log('A idade somadas das duas pessoas é: ' + (age1 + age2));
}

age(ageCarlos, ageGustavo);

//-----------------------------------
var dateBorn = 2003;
var dateNow = 2023;

function agePeople(year1, year2){
    console.log(`A sua idade atual é: ` + (year1 - year2));
}

agePeople(dateNow, dateBorn);

//-----------------------------------
var cityNow = 'Ananindeua';
var bornCity = 'Belém';

function cityInformation(city1, city2){
    console.log(`A sua cidade natal é ${city1} e sua cidade atual é ${city2}.`);
}

cityInformation(bornCity, cityNow);

//------------------------------------
const idadeNatalia = 14;
const idadeVictor = 20;
const idadeDavi = 24;

function ageInformation(age1, age2, age3){
    console.log("Segue as idades da galera: " + age1, age2, age3);
}

ageInformation(idadeNatalia, idadeVictor, idadeDavi);



//------------------------------------------------
const idadeAlan = 33;
const idadeClaudio = 53;

function sumIdade(numero01, numero02){
    var result = numero01 + numero02;
    return result;
}

var sumAlanClaudio = sumIdade(idadeAlan, idadeClaudio);
console.log(sumAlanClaudio);


const idadeVeronica = 77;
const idadeSaltimbanco = 43;

function sumIdade2(try1, try2){
    var result2 = try1 + try2;
    return result2;
}

var sumVeronicaSaltimbanco = sumIdade2(idadeVeronica, idadeSaltimbanco);
console.log(sumVeronicaSaltimbanco);


//-----------------------------------------------
const idadeYara = 12;
const idadeZeca = 18;

function sum3(try3, try4){
    var result3 = try3 + try4;
    return result3;
}

var sumYaraZeca = sum3(idadeYara, idadeZeca);
console.log(sumYaraZeca);


//--------------------------------------------------
const idadeRitaLee = 75;
const idadeSilvioSantoa = 95;

function sum4(age21, age22, age23){
    var result5 = age21, age22, age23;
    return result5;
}

var sum4Result = sum4(idadeRitaLee, idadeSilvioSantoa, idadeZeca);
console.log(sum4Result);