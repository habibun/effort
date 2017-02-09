/**
 * Created by jony on 2/9/17.
 */

var React = require('react');

var Example = React.createClass({
    componentWillUnmount: function () {
        alert('Goodbye world');
    },

    render: function () {
        return <h1>Hello world</h1>;
    }
});