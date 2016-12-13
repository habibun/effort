/**
 * Created by jony on 12/13/16.
 */

var React = require('react');

var Button = React.createClass({
    render: function () {
        return (
            <button onClick={this.props.talk}>
                Click me!
            </button>
        );
    }
});

module.exports = Button;