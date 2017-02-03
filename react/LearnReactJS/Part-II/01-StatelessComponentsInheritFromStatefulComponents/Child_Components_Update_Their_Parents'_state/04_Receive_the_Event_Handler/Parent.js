/**
 * Created by jony on 2/3/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var Child = require('./Child');

var Parent = React.createClass({
    getInitialState: function () {
        return { name: 'Frarthur' };
    },

    changeName: function(newName){
        this.setState(
            {
                name: newName
            })
    },

    render: function () {
        return (
            <Child
                name={this.state.name} onChange={this.changeName} />
        );
    }
});

ReactDOM.render(
    <Parent />,
    document.getElementById('app')
);