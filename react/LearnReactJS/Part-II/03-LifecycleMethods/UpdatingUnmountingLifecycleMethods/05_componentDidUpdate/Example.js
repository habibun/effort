/**
 * Created by jony on 2/8/17.
 */

var React = require('react');

var Example = React.createClass({
    componentDidUpdate: function (prevProps, prevState) {
        alert('Component is done rendering!');
    },

    render: function () {
        return <h1>Hello world</h1>;
    }
});