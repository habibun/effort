/**
 * Created by jony on 2/5/17.
 */

var React = require('react');

var BestSeller = React.createClass({
    propTypes: {

    },
    render: function () {
        return (
            <li>
                Title: <span>
          {this.props.title}
        </span><br />

                Author: <span>
          {this.props.author}
        </span><br />

                Weeks: <span>
          {this.props.weeksOnList}
        </span>
            </li>
        );
    }
});

module.exports = BestSeller;