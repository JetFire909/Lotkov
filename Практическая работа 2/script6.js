const readline = require('readline-sync');
let a = 5;
for (var i = 1; a <= 250; i++){
    a += a/i + 2;
}
console.log(i)