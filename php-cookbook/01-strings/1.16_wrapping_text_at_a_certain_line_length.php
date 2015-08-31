<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/31/15
 * Time: 7:57 PM
 */

$s = "Four score and seven years ago our fathers brought forth on this continent ↵
a new nation, conceived in liberty and dedicated to the proposition ↵
that all men are created equal.";

/**
 * By default, wordwrap() wraps text at 75 characters per line.
 */
//print "<pre>\n".wordwrap($s)."\n</pre>";

/**
 * An optional second argu‐ment specifies a different line length:
 */
//print wordwrap($s,50);

/**
 * Other characters besides \n can be used for line breaks. For double spacing, use "\n\n":
 */
//print wordwrap($s,50,"\n\n");


/**
 * There is an optional fourth argument to wordwrap() that controls the treatment of words
that are longer than the specified line length. If this argument is 1, these words are
wrapped. Otherwise, they span past the specified line length
 */
print wordwrap('jabberwocky',5) . "\n";
print wordwrap('jabberwocky',5,"\n",1);
