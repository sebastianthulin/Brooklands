<?php

/**
 * Tell WordPress to save the cookie on the domain
 * @var bool
 */

if (strpos($_SERVER['HTTP_HOST'], "brooklands.dev") !== false) {
    define('COOKIE_DOMAIN', ".brooklands.dev");
} else {
    define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);
}
