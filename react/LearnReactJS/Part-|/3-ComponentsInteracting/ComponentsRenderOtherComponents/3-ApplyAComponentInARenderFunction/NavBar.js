/**
 * Created by jony on 1/30/17.
 */

var React = require('react');

var NavBar = React.createClass({
    render: function () {
        var pages = ['home', 'blog', 'pics', 'bio', 'art', 'shop', 'about', 'contact'];
        var navLinks = pages.map(function(page){
            return (
                <a href={'/' + page}>
                    {page}
                </a>
            );
        });

        return <nav>{navLinks}</nav>;
    }
});

module.exports = NavBar;