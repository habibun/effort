function talk(greeing, farewell) {
    var args = Array.prototype.slice.call(arguments, 2);
    console.log(args);
}

//talk('hello', 'goodbye', 'bill', 'joe', 'morty');


//with rest 

function talk2(greeting, farewell, ...names) {
    names.forEach(function (name) {
        console.log(name);
    })
}

talk('hello', 'goodbye', 'bill', 'joe', 'morty');
