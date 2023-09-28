let telefone = "5";
console.log(telefone.padEnd(9, '*'));

let card = "1234123412341234";
let cardSlice = card.slice(-4);
console.log("Esse é o seu cartão? " + cardSlice.padStart(12, "*"))
