/**
 * Created by jony on 2/5/17.
 */

var React = require('react');
var ReactDOM = require('react-dom');
var BestSeller = require('./BestSeller');

var BookList = React.createClass({
    render: function () {
        return (
            <div>
                <h1>Best Sellers</h1>
                <div>
                    <ol>
                        <BestSeller
                            title="Glory and War Stuff for Dads"
                            author="Sir Eldrich Van Hoorsgaard"
                            weeksOnList={10} />
                        <BestSeller
                            title="The Crime Criminals!"
                            author="Brenda Sqrentun"
                            weeksOnList={2} />
                        <BestSeller
                            title="Subprime Lending For Punk Rockers"
                            author="Malcolm McLaren"
                            weeksOnList={600} />
                    </ol>
                </div>
            </div>
        );
    }
});

ReactDOM.render(
    <BookList />,
    document.getElementById('app')
);