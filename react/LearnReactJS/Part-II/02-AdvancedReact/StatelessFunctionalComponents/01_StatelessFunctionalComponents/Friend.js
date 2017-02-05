/**
 * Created by jony on 2/5/17.
 */

var ReactDOM = require('react-dom');

function Friend(){
    return <img src='https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-octopus.jpg' />;
}

ReactDOM.render(
    <Friend />,
    document.getElementById('app')
);