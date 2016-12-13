/**
 * Created by jony on 12/12/16.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var Greeting = React.createClass({
    render: function () {
        return <h1>Hi there, {this.props.firstName}</h1>;
    }
});

// ReactDOM.render goes here:
ReactDOM.render(
    <Greeting firstName='Habibun' />,
    document.getElementById('app')
);