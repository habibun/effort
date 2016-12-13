/**
 * Created by jony on 12/13/16.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var List = require('./List');

var App = React.createClass({
    render: function () {
        return (
            <div>
                <List type='Living Musician'>
                    <li>Sachiko M</li>
                    <li>Harvey Sid Fisher</li>
                </List>
                <List type='Living Cat Musician'>
                    <li>Nora the Piano Cat</li>
                </List>
            </div>
        );
    }
});

ReactDOM.render(
    <App />,
    document.getElementById('app')
);