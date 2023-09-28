function adicionar(...names){
    console.log(names, name)
}

let name = ['test1', 'test2'];
adicionar('Reinaldo', 'Patricia', ...name);

//

function addNumbers(...numbers){
    let numbersArrays = [
        ...numbers,
        ...numbersWithSArrays
    ]
    
    return numbersArrays;

}

let numbersWithSArrays = [7,9,3,4];
addNumbers(2,3,4,5)

console.log(addNumbers);

//
function helloWorld(){
    return "Hello, world!";
}

console.log(helloWorld());