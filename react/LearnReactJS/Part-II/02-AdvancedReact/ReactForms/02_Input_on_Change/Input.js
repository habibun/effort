/**
 * Created by jony on 2/6/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');

var Input = React.createClass({
    render: function () {
        return (
            <div>
                <input type="text" onChange={this.handleUserInput}/>
                <h1>I am an h1.</h1>
            </div>
        );
    }
});

ReactDOM.render(
    <Input />,
    document.getElementById('app')
);