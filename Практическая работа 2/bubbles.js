function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min; 
}

function randomIntArray(minLen, maxLen, minVal, maxVal) {
    const length = getRandomInt(minLen, maxLen); 
    const arr = [];
    for (let i = 0; i < length; i++) {
        arr.push(getRandomInt(minVal, maxVal)); 
    }
    return arr;
}

function bubbleSort(arr) {
    for (let n = 0; n < arr.length; n++) {
        for (let i = 0; i < arr.length - 1 - n; i++) {
            if (arr[i] > arr[i + 1]) {
                let temp = arr[i];
                arr[i] = arr[i + 1];
                arr[i + 1] = temp;
            }
        }
    }
    return arr;
}

function searchMultiple(number){
    number = 5;
    if(result[0] % number){
        return result[0];
    } else {
        return false;
    }
}

const nums = randomIntArray(10, 20, 0, 100);
console.log("Исходный массив:", nums);

const result = bubbleSort(nums);
console.log("Отсортированный массив:", result);

console.log(searchMultiple())