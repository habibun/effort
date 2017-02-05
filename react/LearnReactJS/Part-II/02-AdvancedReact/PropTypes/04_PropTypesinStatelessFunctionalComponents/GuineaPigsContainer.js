/**
 * Created by jony on 2/5/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var GuineaPigs = require('../components/GuineaPigs');

var GUINEAPATHS = [
    'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-guineapig-1.jpg',
    'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-guineapig-2.jpg',
    'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-guineapig-3.jpg',
    'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-guineapig-4.jpg'
];

var GuineaPigsContainer = React.createClass({
    getInitialState: function () {
        return { currentGP: 0 };
    },

    nextGP: function () {
        var current = this.state.currentGP;
        var next = ++current % GUINEAPATHS.length;
        this.setState({ currentGP: next });
    },

    interval: null,

    componentDidMount: function () {
        this.interval = setInterval(this.nextGP, 5000);
    },

    componentWillUnmount: function () {
        clearInterval(this.interval);
    },

    render: function () {
        var src = GUINEAPATHS[this.state.currentGP];
        return <GuineaPigs src={src} />;
    }
});

ReactDOM.render(
    <GuineaPigsContainer />,
    document.getElementById('app')
);