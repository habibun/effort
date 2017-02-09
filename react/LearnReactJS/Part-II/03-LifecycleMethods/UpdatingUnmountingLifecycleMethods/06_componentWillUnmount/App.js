/**
 * Created by jony on 2/10/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var Enthused = require('./Enthused');

var App = React.createClass({
    getInitialState: function () {
        return {
            enthused: false,
            text: ''
        };
    },

    toggleEnthusiasm: function () {
        this.setState({
            enthused: !this.state.enthused
        });
    },

    setText: function (text) {
        this.setState({ text: text });
    },

    addText: function (newText) {
        var text = this.state.text + newText;
        this.setState({ text: text });
    },

    handleChange: function (e) {
        this.setText(e.target.value);
    },

    render: function () {
        var button;
        if (this.state.enthused) {
            button = (
                <Enthused
                    toggle={this.toggleEnthusiasm}
                    addText={this.addText} />
            );
        } else {
            button = (
                <button
                    onClick={this.toggleEnthusiasm}>
                    Add Enthusiasm!
                </button>
            );
        }

        return (
            <div>
                <h1>Auto-Enthusiasm</h1>
                <textarea
                    rows="7"
                    cols="40"
                    value={this.state.text}
                    onChange={this.handleChange}>
        </textarea>
                {button}
                <h2>{this.state.text}</h2>
            </div>
        );
    }
});

ReactDOM.render(
    <App />,
    document.getElementById('app')
);
