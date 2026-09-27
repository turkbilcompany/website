<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

$_GET['p'] = ltrim($uri, '/');
if ($_GET['p'] == "") {
    $_GET['p'] = "index";
}

require_once __DIR__ . '/index.php';
?>