class Person{


    constructor(name, age){
        this.name = name;
        this.age = age;
    }
}


class Student extends Person{
    constructor(name, age, id){
        super(name, age);
        this.id = id;
    }
}
var p1 = new Person('João');
var p2 = new Person('Agnaldo');
var p3 = new Person('Veronica');
var p4 = new Student('Gustavo', 4, "#33957856");

console.log(`Nome do estudante: ${p4.name}; Matrícula: ${p4.id}. Idade: ${p4.age}`);