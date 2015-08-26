<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/26/15
 * Time: 8:38 PM
 */

/**
 *  Switching tabs and spaces
 */
$rows = $db->query('SELECT message FROM messages WHERE id = 1');
$obj = $rows->fetch(PDO::FETCH_OBJ);
$tabbed = str_replace(' ' , "\t", $obj->message);
$spaced = str_replace("\t", ' ' , $obj->message);
print "With Tabs: <pre>$tabbed</pre>";
print "With Spaces: <pre>$spaced</pre>";


/**
 * Example 1-22. tab_expand( )
 */

function tab_expand($text) {
    while (strstr($text,"\t")) {
        $text = preg_replace_callback('/^([^\t\n]*)(\t+)/m',
            'tab_expand_helper', $text);
    }
    return $text;
}
function tab_expand_helper($matches) {
    $tab_stop = 8;
    return $matches[1] . str_repeat(' ',strlen($matches[2]) * $tab_stop - (strlen($matches[1]) % $tab_stop));
}

$spaced = tab_expand($obj->message);

/**
 * Example 1-23. tab_unexpand( )
 */
function tab_unexpand($text) {
    $tab_stop = 8;
    $lines = explode("\n",$text);
    foreach ($lines as $i => $line) {
// Expand any tabs to spaces
        $line = tab_expand($line);
        $chunks = str_split($line, $tab_stop);
        $chunkCount = count($chunks);
// Scan all but the last chunk
        for ($j = 0; $j < $chunkCount - 1; $j++) {
            $chunks[$j] = preg_replace('/ {2,}$/',"\t",$chunks[$j]);
        }
// If the last chunk is a tab-stop's worth of spaces
// convert it to a tab; Otherwise, leave it alone
        if ($chunks[$chunkCount-1] == str_repeat(' ', $tab_stop)) {
            $chunks[$chunkCount-1] = "\t";
        }
// Recombine the chunks
        $lines[$i] = implode('',$chunks);
    }
// Recombine the lines
return implode("\n",$lines);
}

$tabbed = tab_unexpand($obj->message);
