/**
 * Created by jony on 2/3/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var styleMe = <h1 style={{ background: 'lightblue', color: 'darkred' }}>Please style me!  I am so bland!</h1>;

ReactDOM.render(
    styleMe,
    document.getElementById('app')
);