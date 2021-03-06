/**
 * Created by jony on 2/5/17.
 */

var React = require('react');

var Runner = React.createClass({
    propTypes: {
        message:   React.PropTypes.string.isRequired,
        style:     React.PropTypes.object.isRequired,
        isMetric:  React.PropTypes.bool.isRequired,
        miles:     React.PropTypes.number.isRequired,
        milesToKM: React.PropTypes.func.isRequired,
        races:     React.PropTypes.array.isRequired
    },

    render: function () {
        var miles = this.props.miles;
        var km = this.props.milesToKM(miles);
        var races = this.props.races.map(function(race, i){
            return <li key={race + i}>{race}</li>;
        });

        return (
            <div style={this.props.style}>
                <h1>{this.props.message}</h1>
                { this.props.isMetric &&
                <h2>One Time I Ran {km} Kilometers!</h2> }
                { !this.props.isMetric &&
                <h2>One Time I Ran {miles} Miles!</h2> }
                <h3>Races I've Run</h3>
                <ul id="races">{races}</ul>
            </div>
        );
    }
});