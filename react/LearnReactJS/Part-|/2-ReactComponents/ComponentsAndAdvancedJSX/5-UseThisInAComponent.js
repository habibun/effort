/**
 * Created by jony on 12/10/16.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var MyName = React.createClass({
    // name property goes here:
    name: "jony",

    render: function () {
        return <h1>My name is {this.name}.</h1>;
    }
});

ReactDOM.render(<MyName />, document.getElementById('app'));