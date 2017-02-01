/**
 * Created by jony on 2/2/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var Child = require('./Child.js');

var Parent = React.createClass({

    getInitialState: function(){
        return {
            'name': 'Frarthur'
        }
    },

    render: function() {
        return <Child name= { this.state.name } />;
    }
});

ReactDOM.render(
    <Parent />,
    document.getElementById('app')
);