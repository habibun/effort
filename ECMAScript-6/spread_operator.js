function talk2(greeting, farewell, ...names) {
    names.forEach(function (name) {
        console.log(name);
    })
}

var arr = ['hello', 'goodbye'];
talk2(...arr, 'bill', 'joe', 'morty');

