/**
 * Created by jony on 2/5/17.
 */

var React = require('react');

function GuineaPigs(props){
    var src = props.src;
    return (
        <div>
            <h1>Cute Guinea Pigs</h1>
            <img src={src} />
        </div>
    );

}

GuineaPigs.propTypes= {
    src: React.PropTypes.string.isRequired,
}

module.exports = GuineaPigs;