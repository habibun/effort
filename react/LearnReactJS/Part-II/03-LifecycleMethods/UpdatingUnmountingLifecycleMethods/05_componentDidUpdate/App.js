/**
 * Created by jony on 2/8/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var TopNumber = require('./TopNumber');
var Display = require('./Display');
var Target = require('./Target');
var random = require('./helpers').random;
var clone = require('./helpers').clone;

var fieldStyle = {
    position: 'absolute',
    width:  250,
    bottom: 60,
    left:   10,
    height: '60%',
};

var App = React.createClass({
    getInitialState: function () {
        return {
            game:    false,
            targets: {},
            latestClick: 0
        };
    },

    intervals: null,

    createTarget: function (key, ms) {
        ms = ms || random(500, 2000);
        this.intervals.push(setInterval(function(){
            var targets = clone(this.state.targets);
            var num = random(1, 1000*1000);
            targets[key] = targets[key] != 0 ? 0 : num;
            this.setState({ targets: targets });
        }.bind(this), ms));
    },

    hitTarget: function (e) {
        if (e.target.className != 'target') return;
        var num = parseInt(e.target.innerText);
        for (var target in this.state.targets) {
            var key = Math.random().toFixed(4);
            this.createTarget(key);
        }
        this.setState({ latestClick: num });
    },

    startGame: function () {
        this.createTarget('first', 750);
        this.setState({
            game: true
        });
    },

    endGame: function () {
        this.intervals.forEach(function(int){
            clearInterval(int);
        });
        this.intervals = [];
        this.setState({
            game:    false,
            targets: {},
            latestClick: 0
        });
    },

    componentWillMount: function() {
        this.intervals = [];
    },

    componentDidUpdate: function (prevProps, prevState) {
        if (this.state.latestClick < prevState.latestClick) {
            this.endGame();
        }
    },

    render: function () {
        var buttonStyle = {
            display: this.state.game ? 'none' : 'inline-block'
        };
        var targets = [];
        for (var key in this.state.targets) {
            targets.push(
                <Target
                    number={this.state.targets[key]}
                    key={key} />
            );
        }
        return (
            <div>
                <TopNumber
                    number={this.state.latestClick}
                    game={this.state.game} />
                <Display number={this.state.latestClick} />
                <button
                    onClick={this.startGame}
                    style={buttonStyle}>
                    New Game
                </button>
                <div
                    style={fieldStyle}
                    onClick={this.hitTarget} >
                    {targets}
                </div>
            </div>
        );
    }
});

ReactDOM.render(
    <App />,
    document.getElementById('app')
);