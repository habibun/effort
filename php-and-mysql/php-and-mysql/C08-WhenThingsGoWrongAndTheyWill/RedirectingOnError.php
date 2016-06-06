<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 23/5/2015
 * Time: 9:22 AM
 */

// Site root
define("SITE_ROOT", "/phpMM2/");

function handle_error($user_error_message, $system_error_message)
{
    header("Location: " . SITE_ROOT . "scripts/show_error.php?" .
        "error_message={$user_error_message}&" .
        "system_error_message={$system_error_message}");
    exit();
}