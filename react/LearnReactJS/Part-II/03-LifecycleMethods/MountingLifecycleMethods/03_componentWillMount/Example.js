/**
 * Created by jony on 2/7/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var Example = React.createClass({
    componentWillMount: function () {
        alert('component is about to mount!');
    },

    render: function () {
        return <h1>Hello world</h1>;
    }
});

ReactDOM.render(
    <Example />,
    document.getElementById('app')
);

setTimeout(function(){
    ReactDOM.render(
        <Example />,
        document.getElementById('app')
    );
}, 2000);