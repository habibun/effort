/**
 * Created by jony on 2/8/17.
 */

var React = require('react');

var Example = React.createClass({
    getInitialState: function () {
        return { subtext: 'Put me in an <h2> please.' };
    },

    shouldComponentUpdate: function (nextProps, nextState) {
        if ((this.props.text == nextProps.text) &&
            (this.state.subtext == nextState.subtext)) {
            alert("Props and state haven't changed, so I'm not gonna update!");
            return false;
        } else {
            alert("Okay fine I will update.")
            return true;
        }
    },

    render: function () {
        return (
            <div>
                <h1>{this.props.text}</h1>
                <h2>{this.state.subtext}</h2>
            </div>
        );
    }
});