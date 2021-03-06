/**
 * Created by jony on 2/3/17.
 */

var React = require('react');

var Child = React.createClass({

    handleChange: function(e)
    {
        var name = e.target.value;
        this.props.onChange(name);
    },

    render: function () {
        return (
            <div>
                <h1>
                    Hey my name is {this.props.name}!
                </h1>
                <select id="great-names" onChange={this.handleChange}>
                    <option value="Frarthur">
                        Frarthur
                    </option>

                    <option value="Gromulus">
                        Gromulus
                    </option>

                    <option value="Thinkpiece">
                        Thinkpiece
                    </option>
                </select>
            </div>
        );
    }
});

module.exports = Child;