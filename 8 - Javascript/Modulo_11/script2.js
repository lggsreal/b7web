var test = () => {
    console.log('Olá, mundo')
}

test();

//

let listaOne = [1,2,3,4,5,6,7];
let listTow = [...listaOne, 8,9]
console.log(listTow);


//
let objOne = {
    cidade : "Belém",
    estado : 'Pará',
}

let obgTwo = {
    ...objOne,
    pais : 'Brasil'
}

console.log(obgTwo);

