/**
 * Created by jony on 2/8/17.
 */

var React = require('react');

var Example = React.createClass({
    componentWillUpdate: function (nextProps, nextState) {
        alert('Component is about to update!  Any second now!');
    },

    render: function () {
        return <h1>Hello world</h1>;
    }
});