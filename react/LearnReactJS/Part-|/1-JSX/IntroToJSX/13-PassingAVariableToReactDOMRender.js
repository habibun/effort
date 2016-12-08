/**
 * Created by jony on 12/8/16.
 */
var React = require('react');
var ReactDOM = require('react-dom');

// Write code here:
var myList = (
    <ul>
        <li>first list item</li>
        <li>second list item</li>
        <li>third list item</li>
    </ul>
);

ReactDOM.render(
    myList,
    document.getElementById('app')
);