/**
 * Created by jony on 2/6/17.
 */

var React = require('react');

var Example = React.createClass({
    getInitialState: function () {
        return { userInput: '' };
    },

    handleChange: function (e) {
        this.setState({
            userInput: e.target.value
        });
    },

    render: function () {
        return (
            <input
                onChange={this.handleChange}
                type="text" />
        );
    }
});