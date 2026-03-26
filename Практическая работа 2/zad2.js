//В массиве объектов хранятся следующие данные о сотрудниках:
//фамилия, имя, отчество, образование, должность.
//Вывести информацию о тех сотрудниках,  которые имеют высшее  образование.
//Напишите функцию edication(arr, education), принимающую параметром массив и образование,
//возращающую новый массив объектов с информацией о сотрудниках,
//имеющих заданное  образование.
//Полученный массив вывести в консоль
//Входной и выходной массивы создайте по образцу.
/* пример входного массива
let arr = [{
  name: 'Иван',
  surname: 'Иванович',
  p_name: 'Иванов',
  education: 'среднее',
  position: 'тестировщик',
  tel: '+79112212112',
  adresss: 'Санкт-петербург, пр.Просвещения д.8,кв.4'
  }
]
Результ работы функции - массив объектов с такими полями (образец)
{
  name: 'Иван',
  surname: 'Иванович',
  p_name: 'Иванов',
  education: 'среднее',
 }
*/

let staff = [
  {
    name: 'Иван',
    surname: 'Иванович',
    p_name: 'Иванов',
    education: 'среднее',
    position: 'тестировщик'
  },
  {
    name: 'Никита',
    surname: 'Николаевич',
    p_name: 'Гордеев',
    education: 'высшее',
    position: 'разработчик'
  },
  {
    name: 'Алексей',
    surname: 'Петров',
    p_name: 'Михайлович',
    education: 'срднее',
    position: 'разработчик'
  }
];

function education(arr, target) {
  let result = []; 
  for (let employee of arr) {
    if (employee.education === target) {
      let filteredEmployee = {
        name : employee.name,
        surname : employee.surname,
        p_name : employee.p_name,
        education : employee.education
      }
      result.push(filteredEmployee);
    }
  }
  return result;
}

let filteredStaff = education(staff, 'высшее');
console.log(filteredStaff);
