/**
 * Created by jony on 2/7/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var Flashy = React.createClass({
    componentWillMount: function () {
        alert('AND NOW, FOR THE FIRST TIME EVER...  FLASHY!!!!');
    },
    componentDidMount: function(){
        alert('YOU JUST WITNESSED THE DEBUT OF...  FLASHY!!!!!!!');
    },

    render: function () {

        alert('Flashy is rendering!');

        return (
            <h1 style={{ color: this.props.color }}>
                OOH LA LA LOOK AT ME I AM THE FLASHIEST
            </h1>
        );
    }
});

ReactDOM.render(
    <Flashy color='red' />,
    document.getElementById('app')
);

setTimeout(function () {
    ReactDOM.render(
        <Flashy color='green' />,
        document.getElementById('app')
    );
}, 2000);