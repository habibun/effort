var numbers = [5, 10];

//var number1 = numbers[0];
//var number2 = numbers[1];

//with destructuring


//console.log(number1);
var [number1, number2] = numbers;


//swaping value

[number2, number1] = [number1, number2];

//console.log(number1);


//with object
var dog = {
    name: 'shorty',
    age: 22
}

var {name: dogName, age: dogAge} = dog;

console.log(dogName);
console.log(dogAge);


var {name, age} = dog;
console.log(name);
console.log(age);
