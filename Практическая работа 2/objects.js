// 'use strict'
// const user = {
//     name : 'Иванов',
//     birth : 2005,
//     sayHello(){
//         console.log('Привет! Меня зовут ' + this . name)
//     }
// };

// user.sayHello();

// function User(name, birth){
//     this.name = name;
//     this.birth = birth;
//     this.sayHello = function(){
//         console.log('Привет! Меня зовут ' + this . name)
//     }
// }

// let user1 = new User('Вова', 2007);
// let user2 = new User('Вася', 2005);
// console.log(user1.name, user1.birth)
// console.log(user2.name, user2.birth)

class User1{
    #name;
    #birth;
    constructor(name, birth){
        this.name = name;
        this.birth = birth;
    }
    sayHello(){
        console.log('Привет! Меня зовут ' + this.name);
    }
}
let user3 = new User1('Петя', 2003);
console.log(user3.name)
user3.sayHello()
