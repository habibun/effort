/**
 * Created by jony on 2/7/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var Example2 = React.createClass({
    getInitialState: function () {
        return { text: '' };
    },

    componentWillMount: function () {
        this.setState({ text: 'Hello world' });
    },

    render: function () {
        return <h1>{this.state.text}</h1>;
    }
});

ReactDOM.render(
    <Example2 />,
    document.getElementById('app')
);