var colors = ['Blue', 'Green', 'Red'];
console.log(colors[0]);

//--------------------------------
var ingredietes = [
    'Agua',
    'Farinha',
    'Ovo',
    'Corante',
    'Sal'
]

ingredietes.push('Cebola'); //Adicionei cebola no array
ingredietes.pop(); //Remove o último item do array
ingredietes.shift(); //Remove o primeiro

console.log(`Total de ingredientes: ${ingredietes.length}`);

//---------------------------------------------
var carros = [
    'BMW',
    'Ferrari',
    'Mercedes'
]
console.log(carros[1]); //Onde está a Ferrari

carros[1] = 'Audi' //Ferrari substituida por Audi
console.log(`Lista com Audi: ${carros}`)

//---------------------------------------
carros.push('Volvo');
console.log(carros);

//---------------------------------
console.log(`Temos essa quantidades de itens no array: ${carros.length}`);

