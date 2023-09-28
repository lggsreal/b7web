let n = 10;
let r = n.toString(); // De número para string
console.log(r)

let test2 = 10.765757687578;
let r2 = test2.toFixed(2); //Apenas 2 decimais na frente do "10"
console.log(r2)

let test3 = 10.00493054930593;
let r3 = 'R$: ' + test3.toFixed(2);  // Mudar o pARÂMETRO MODIFICA O DECIMAL
console.log(r3);

let test4 = "333";
let r4 = parseInt(test4);  //De string para Inteiro
console.log(r4);

let test5 = '3221.323231223';
let r5 = parseFloat(test5);  //Converter string para float
console.log(r5);