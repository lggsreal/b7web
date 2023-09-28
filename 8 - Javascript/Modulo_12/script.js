let person = {
    nome : "Gustavo",
    idade: 80,
    caracteristica : ['Manso', 'inteligente', 'besta pra mulher']
}

console.log(person.nome);
console.log(person.caracteristica[2]);


// JSON PARSE - STRING PARA JASON
let people = JSON.parse('{"nome":"Gustavo", "idade":90}'); //Passando uma string para um json
console.log(people.nome);
