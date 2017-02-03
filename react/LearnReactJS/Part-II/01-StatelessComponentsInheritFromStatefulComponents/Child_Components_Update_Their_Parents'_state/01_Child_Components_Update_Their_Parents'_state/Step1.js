/**
 * Created by jony on 2/3/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var ChildClass = require('./ChildClass');

var ParentClass = React.createClass({
    getInitialState: function () {
        return { totalClicks: 0 };
    },

    handleClick: function () {
        var total = this.state.totalClicks;

        // calling handleClick will
        // result in a state change:
        this.setState(
            { totalClicks: total + 1 }
        );
    }
});