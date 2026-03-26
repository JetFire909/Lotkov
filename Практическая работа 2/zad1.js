//Дана строка, содержащая произвольный русский текст. 
//Вывести, какие буквы и сколько раз встречаются в этом тексте. 
//Напишите функцию функцию countLetters(str), 
//принимающую параметром строку
//и возвращающую объект вида {"а":5, "В":4, } . 
//Задайте строку и выведите в консоль результат.

function countLetters(str) {
    const result = {};
    for (let i = 0; i < str.length; i++) {
        const char = str[i];
        if (char !== " " &&  char !== "," && char !== "!") {
            if (result[char]) {
            result[char]++;
            } else {
            result[char] = 1;
            }
        }
    }
    return result;
}
const text = "Привет, мир!";
console.log(text)
console.log(countLetters(text));
