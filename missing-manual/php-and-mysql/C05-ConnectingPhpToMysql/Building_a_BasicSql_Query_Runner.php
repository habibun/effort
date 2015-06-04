<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 18/5/2015
 * Time: 8:53 PM
 */

//uppercase letter
$jony = 'jony';
strtoupper($jony);

//nested condition
$query_text = $_REQUEST['query'];
$return_rows = false;
$uppercase_query_text = strtoupper($query_text);
$location = strpos($uppercase_query_text, "CREATE");
if ($location === false) {
    $location = strpos($uppercase_query_text, "INSERT");
    if ($location === false) {
        $location = strpos($uppercase_query_text, "UPDATE");
        if ($location === false) {
            $location = strpos($uppercase_query_text, "DELETE");
            if ($location === false) {
                $location = strpos($uppercase_query_text, "DROP");
                if ($location === false) {
                    // If we got here, it's not a CREATE, INSERT, UPDATE,
                    //   DELETE, or DROP query. It should return rows.
                    $return_rows = true;
                }
            }
        }
    }
}
