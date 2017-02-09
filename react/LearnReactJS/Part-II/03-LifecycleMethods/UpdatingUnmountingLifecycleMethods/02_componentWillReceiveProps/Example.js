/**
 * Created by jony on 2/8/17.
 */

var React = require('react');

var Example = React.createClass({
    componentWillReceiveProps: function (nextProps) {
        alert("Check out the new props.text that "
            + "I'm about to get:  " + nextProps.text);
    },

    render: function () {
        return <h1>{this.props.text}</h1>;
    }
});


// The first render won't trigger
// componentWillReceiveProps:
ReactDOM.render(
    <Example text="Hello world" />,
    document.getElementById('app')
);

// After the first render,
// subsequent renders will trigger
// componentWillReceiveProps:
setTimeout(function () {
    ReactDOM.render(
        <Example text="Hello world" />,
        document.getElementById('app')
    );
}, 1000);