<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author  zae_binsam
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// File ini memungkinkan kita untuk meniru fungsi "mod_rewrite" dari Apache
// server web PHP built-in. Ini memberikan cara mudah untuk menguji Laravel
// aplikasi tanpa menginstal perangkat lunak server web "nyata" di sini.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
