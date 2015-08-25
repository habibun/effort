<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/24/15
 * Time: 11:19 PM
 */

//  If $length is specified, only that many characters are replaced
print substr_replace('My pet is a blue dog.','fish.',12);
print substr_replace('My pet is a blue dog.','green',12,4);
$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card,'xxxx ',0,strlen($credit_card)-4);


/*
 * If $start is negative, the new substring is placed by counting $start characters from
the end of $old_string, not from the beginning
*/
print substr_replace('My pet is a blue dog.','fish.',-9);
print substr_replace('My pet is a blue dog.','green',-9,4);


//If $start and $length are 0, the new substring is inserted at the start of $old_string:
print substr_replace('My pet is a blue dog.','Title: ',0,0);

//Displaying long text with an ellipsis
$r = mysql_query("SELECT id,message FROM messages WHERE id = $id") or die();
$ob = mysql_fetch_object($r);
printf('<a href="more-text.php?id=%d">%s</a>',
    $ob->id, substr_replace($ob->message,' ...',25));
