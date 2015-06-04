<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 25/5/2015
 * Time: 10:00 PM
 */

/**
 * // Build the SELECT statement
    $select_query = sprintf("SELECT * FROM images WHERE image_id = %d", $image_id);
 */

/**
 * Content-type Use this to alert a browser to what the MIME type is of the
content you’re about to send.
 */

/**
 *  Content-length Use this to provide the size (the “length” in bytes) of the
information you’re about to send
 */

// Tell the browser what's coming with headers
header('Content-type: ' . $image['mime_type']);
header('Content-length: ' . $image['file_size']);