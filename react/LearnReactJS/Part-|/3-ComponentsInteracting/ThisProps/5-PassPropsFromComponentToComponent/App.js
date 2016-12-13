/**
 * Created by jony on 12/12/16.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var Greeting = require('./Greeting.js');

var App = React.createClass({
    render: function () {
        return (
            <div>
                <h1>
                    Hullo and, "Welcome to The Newzz," "On Line!"
                </h1>
                <Greeting name="Habibun" />
                <article>
                    Latest newzz:  where is my phone?
                </article>
            </div>
        );
    }
});

ReactDOM.render(
    <App />,
    document.getElementById('app')
);