let age = 5;
let ageGroup;
if (age <= 1){
    console.log('котята');
} else if (age > 3){
    console.log('Молодые котята');
} else if (age>=1 && age<=3){
    console.log('Котята средних лет');
}else if (age>=3 && age<=7){
    console.log('Зрелые котята');
} else if (age > 7){
    console.log('Старые котята');
}