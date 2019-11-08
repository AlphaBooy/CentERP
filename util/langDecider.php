<?php
/*
 * Name conventions for language files
 * 2 letters (ex : fr - en - es...)
 * Same name in the cookie and in the project files
 */

if (isset($_COOKIE['lang']) && $_COOKIE['lang'] != NULL) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'en'; //Default language
}

require_once "../public/lang/". $lang .".php";