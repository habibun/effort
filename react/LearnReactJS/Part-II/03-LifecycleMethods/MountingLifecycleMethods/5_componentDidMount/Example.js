/**
 * Created by jony on 2/7/17.
 */

var React = require('react');

var Example = React.createClass({
    componentDidlMount: function () {
        alert('component just finished mounting!');
    },

    render: function () {
        return <h1>Hello world</h1>;
    }
});