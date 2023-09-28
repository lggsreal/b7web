//Criação de promessa
const myPromise = new Promise((resolve, reject) => {
    const nome = "Gustavo";

    if(nome === "Gustavo"){
        resolve('Usuário encontrado');
    }
    else{
        reject('Usuário não foi encontrado')
    }
})

myPromise.then((data) => {
    console.log(data);
})

myPromise.catch((err) => {
    console.log('Aconteceu uma cagada: ' + err);
})



// Promessa deu errado
const promisseTwo = new Promise((resolve, reject) => {
    const name = "Agnaldo";

    if(name == "Gustavo"){
        resolve('O nome do usuário é Gustavo');
    }else{
        reject('O nome do usuário não é Gustavo')
    }
})

promisseTwo.then((data) => {
    console.log(data);
})

promisseTwo.catch((err) => {
    console.log("Aconteceu uma cagada: " + err);
})

// Vários then
const myPromisse3 = new Promise((resolve, reject) => {
    const name = "gustavo";

    if(name== "gustavo"){
        resolve('Acertou no nome');
    }
    else{
        reject("Errou o nome");
    }
})

myPromisse3
.then((data) => {
    return data.toUpperCase();
})
.then((stringModificada) => {
    console.log(stringModificada);
})


//Resolver várias promessas
const p1 = new Promise((resolve, reject) => {
    resolve("P1 OK!");
});

const p2 = new Promise((resolve, reject) => {
    resolve("P2 OK!");
});

const p3 = new Promise((resolve, reject) => {
    resolve("P3 OK!");
});

const AllPromises = Promise.all([p1, p2, p3]).then((data) => {
    console.log(data);
})


// Exemplo de Espera

console.log('Testando aas minhas promessas')

const myPromisse4 = new Promise((resolve, reject) => {
    setTimeout(() => {
        console.log('Executando a promise 4');
    }, 2000)
})



//Fest Requesq API do GitHub
// 
