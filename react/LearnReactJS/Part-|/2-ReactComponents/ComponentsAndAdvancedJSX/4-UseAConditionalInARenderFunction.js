/**
 * Created by jony on 12/10/16.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var fiftyFifty = Math.random() < 0.5;

// React.createClass call begins here:
var TonightsPlan = React.createClass({
    render: function(){
        var task;
        if(!fiftyFifty){
            task = "to bed WOOO";
        }else {
            task = "out WOOO";
        }

        return <h1>Tonight I'm going {task}</h1>;
    }
});

ReactDOM.render(
    <TonightsPlan />,
    document.getElementById('app')
);