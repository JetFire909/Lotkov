function bubbleSort(arr) {
    for  (let n = 0; n < arr.length; n++){
         for(let i = 0; i < arr.length - 1 - n; i++){
            if (arr[i] > arr[i + 1]){
                let temp = arr[i];
                arr[i] = arr[i + 1];
                arr[i + 1] = temp;
            }
         }
    }
    return arr;
}
const nums = [12, 40, 67, 42, 99];
const result = bubbleSort(nums);
console.log(result);