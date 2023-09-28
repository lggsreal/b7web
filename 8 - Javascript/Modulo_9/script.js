class Person{
    constructor(name, age){
        this.name = name;
        this.age = age;
    }
}

let p1 = new Person("Gustavo", 20);
let p2 = new Person('Carlos', 80);
let p3 = new Person('Pedro', 50);

console.log(`A pessoa 1 se chama ${p1.name} e tem ${p1.age}`);
console.log(`A pessoa 2 se chama ${p2.name} e tem ${p2.age}`);
console.log(`A pessoa 3 se chama ${p3.name} e tem ${p3.age}`);

//------------------------------
class PersonTwo{
    constructor(name, age){
        this.name = name;
        this.age = age;
    }

    setps(){
        this.steps++;
    }
}

var person1 = new PersonTwo("Gustavo", 22);
var person2 = new PersonTwo("Agnaldo", 33);
console.log(person1.name);
console.log(person2.age);

person2.setps()