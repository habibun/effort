/**
 * Created by jony on 2/5/17.
 */

// A component class written in the usual way:
var MyComponentClass = React.createClass({
    render: function(){
        return <h1>Hello world</h1>;
    }
});

// The same component class, written as a stateless functional component:
function MyComponentClass () {
    return <h1>Hello world</h1>;
}

// Works the same either way:
ReactDOM.render(
    <MyComponentClass />,
    document.getElementById('app')
);