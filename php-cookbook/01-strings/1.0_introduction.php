<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/23/15
 * Time: 10:26 PM
 */

//text using single quote
print
    'I have gone to the store.';
print
    'I\'ve gone to the store.';
print
    'Would you pay $1.75 for 8 ounces of tap water?';
print
    'In double-quoted strings, newline is represented by \n';

print '<br>';

//text using double quote
print
    "I've gone to the store.";
print
    "The sauce cost \$10.25.";
$cost
    = '$10.25';
print
    "The sauce cost $cost.";
print
    "The sauce cost \$\061\060.\x32\x35.";

print '<br>';

//text using heredoc
print <<< END
It's funny when signs say things like:
Original "Root" Beer
"Free" Gift
Shoes cleaned while "you" wait
or have other misquoted words.
END;

//For example, if you’re using jQuery:
$js = <<<'__JS__'
$.ajax({
'url': '/api/getStock',
'data': {
'ticker': 'LNKD'
},
'success': function( data ) {
$( "#stock-price" ).html( "<strong>$" + data + "</strong>" );
}
});
__JS__;
print $js;

// Getting an individual byte in a string
$neighbor = 'Hilda';
print $neighbor[3];

//Example 1-5. Concatenation with a here document
$divClass = 'class1';
$ulClass = 'class2';
$listItem = 'The List Item';

$html = <<< END
<div class="$divClass">
<ul class="$ulClass">
<li>
END
    . $listItem . '</li></div>';
print $html;
