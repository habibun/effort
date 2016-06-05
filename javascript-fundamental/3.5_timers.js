/**
 * Created by jony on 5/28/16.
 */


/**
 * setTimeout function
 */
function log(){
    console.log('We are learning timers.');
}

setTimeout(log, 3000);


/**
 * setInterval
 */
function inter() {
    console.log('This is interval.');
    counter += 1;

    if(counter == 5){
        clearInterval(intervalId);
    }
}

var intervalId = setInterval(inter, 2000),
counter = 0;


/**
 *WindowTimers.setTimeout()
 */
var timeOutId;

function delayedAlert() {
    timeOutId = window.setTimeout(showAlert, 2000);
}

function showAlert() {
    alert('That was really slow!');
}

function clearAlert() {
    window.clearTimeout(timeOutId);
}