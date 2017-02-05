/**
 * Created by jony on 2/5/17.
 */

var React = require('react');

var GuineaPigs = React.createClass({
    render: function () {
        var src = this.props.src;
        return (
            <div>
                <h1>Cute Guinea Pigs</h1>
                <img src={src} />
            </div>
        );
    }
});

module.exports = GuineaPigs;