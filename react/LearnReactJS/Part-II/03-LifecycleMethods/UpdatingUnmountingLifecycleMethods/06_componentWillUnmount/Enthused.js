/**
 * Created by jony on 2/10/17.
 */

var React = require('react');

var Enthused = React.createClass({
    interval: null,

    componentDidMount: function () {
        this.interval = setInterval(function(){
            this.props.addText('!');
        }.bind(this), 15);
    },

    componentWillUnmount: function(prevProps, prevState){
        clearInterval(this.interval);
    },

    render: function () {
        return (
            <button onClick={this.props.toggle}>
                Stop!
            </button>
        );
    }
});

module.exports = Enthused;