/**
 * Created by jony on 2/5/17.
 */

var React = require('react');

var BestSeller = React.createClass({
    propTypes: {
        title: React.PropTypes.string.isRequired,
        author: React.PropTypes.string.isRequired,
        weeksOnList: React.PropTypes.number.isRequired,
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