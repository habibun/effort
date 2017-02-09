/**
 * Created by jony on 2/8/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var yellow = 'rgb(255, 215, 18)';

var TopNumber = React.createClass({
    propTypes: {
        number: React.PropTypes.number,
        game: React.PropTypes.bool
    },

    getInitialState: function () {
        return { 'highest': 0 };
    },

    componentWillReceiveProps: function (nextProps) {
        if (nextProps.number > this.state.highest) {
            this.setState({
                highest: nextProps.number
            });
        } else if (!this.props.game) {
            this.setState({
                highest: 0
            });
        }
    },

    componentWillUpdate: function(nextProps, nextState)   {
        if (document.body.style.background != yellow
            && this.state.highest >= 950*1000) {
            document.body.style.background = yellow;
        } else if (!this.props.game
            && nextProps.game) {
            document.body.style.background = 'white';
        }
    },

    render: function () {
        return (
            <h1>
                Top Number: {this.state.highest}
            </h1>
        );
    }
});

module.exports = TopNumber;