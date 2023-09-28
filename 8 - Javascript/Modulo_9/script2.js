class Person{

    steps = 0;
    age = 0;
    constructor(firstName, lastName, age){
        this.firstName = firstName;
        this.lastName = lastName;
    }

    takeAStep(){
        this.steps++;
    }

    get fullName(){
        return this.firstName + this.lastName;
    }

    newAge(newAge){
        if (typeof newAge == "number"){
        this.age = newAge;
        }
        else{
            console.log('Digite um número válido');
        }
    }
}

let p1 = new Person("João", "Florenço");
let p2 = new Person('Maria');
let p3 = new Person('Pedro');


//----------------------Passos----------------
function stepsAdd(){
    p1.takeAStep();
    console.log("my steps:" + p1.steps);
}

var button = document.querySelector('.stepscount');
button.addEventListener('click', stepsAdd);



//------------------Idade--------------------
p1.newAge(20);

console.log(p1.fullName);
console.log(p1.age);

