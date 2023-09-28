let h1 = document.querySelector('h1');
let increase = document.querySelector('.increase');
let reset = document.querySelector('reset');
let decrease = document.querySelector('.decrease');
let modificacao = document.querySelector(".modificacao")
let count = 0;

function increaseCount(){
    count++;
    h1.textContent = count;
}

function decreaseCount(){
    count--;
    h1.textContent = count
}

function resetCount(){   
    count = 0;
    h1.textContent = count;
}

function ask(){
    let askQuestion = window.prompt('Digite seu número:');

    if(askQuestion >= 0 || askQuestion <= 0){
        parseInt(askQuestion);
        count = askQuestion;
        h1.textContent = count;  

    }else{
        window.alert('Digite um número válido!');
    }   
}

