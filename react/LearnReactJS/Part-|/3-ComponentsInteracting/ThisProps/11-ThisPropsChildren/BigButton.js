/**
 * Created by jony on 12/13/16.
 */

var React = require('react');
var LilButton = require('./LilButton');

var BigButton = React.createClass({
    render: function () {
        console.log(this.props.children);
        return <button>Yo I am big</button>;
    }
});


// Example 1
<BigButton>
    I am a child of BigButton.
</BigButton>


// Example 2
/*
<BigButton>
<LilButton />
</BigButton>
*/


// Example 3
/*
<BigButton />
*/