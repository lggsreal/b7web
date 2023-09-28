class Person{
    static hands = 2;

    constructor(name){
        this.name = name;
    }

    sayHi(){
        console.log(`Olá, eu sou o ${p1.name} e tenho ${Person.hands} mãos.`);
    }
}

var p1 = new Person('Gustavo');
p1.sayHi();