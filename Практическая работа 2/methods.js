// ex 1
const numbers = [1, 2, 3, 4, 5];
const doubledNumbers = numbers.map(function(number) {
  return number * 2;
});
console.log(doubledNumbers)

// ex 2
const result = [
  numbers.reduce(function(accumulator, number) {
    return accumulator + number;
  }, 0),
  numbers.reduce(function(accumulator, number) {
    return accumulator * number;
  }, 1)
];
console.log(result);

// ex 3
const proverbs = [
    "Если тебе где-то не рады в рваных носках, то и в целых туда идти не стоит",
    "Без подошвы тапочки - это просто тряпочки",
    "Если жизнь - это вызов, я перезвоню",
    "Кто рано встаёт — тому весь день спать хочется"
];
const totalLength = proverbs.reduce(function(accumulator, proverb) {
  return accumulator + proverb.length;
}, 0);
console.log(proverbs);
console.log(totalLength);

// ex 4
const rows = [5, 4, 3, 2, 1];
rows.forEach(function(count) {
  console.log('x'.repeat(count));
});

// ex 5
const users = [
  { id: 1, name: 'Анна', age: 25 },
  { id: 2, name: 'Иван', age: 30 },
  { id: 3, name: 'Мария', age: 17 },
  { id: 4, name: 'Петр', age: 15 }
];

const adults = users.filter(function(user) {
  return user.age >= 18;
});
const names = adults.map(function(user) {
  return user.name;
});
console.log(names);

// ex 6
