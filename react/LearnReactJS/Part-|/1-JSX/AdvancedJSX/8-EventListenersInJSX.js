/**
 * Created by jony on 12/9/16.
 */

var React = require('react');
var ReactDOM = require('react-dom');

function makeDoggy (e) {
    // Call this extremely useful function on an <img>.
    // The <img> will become a picture of a doggy.
    e.target.setAttribute('src', 'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-puppy.jpeg');
    e.target.setAttribute('alt', 'doggy');
}

var kitty = (
    <img onClick={makeDoggy}
         src="https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-kitty.jpg"
         alt="kitty" />
);

ReactDOM.render(
    kitty,
    document.getElementById('app')
);