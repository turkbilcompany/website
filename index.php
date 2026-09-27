<?php

if(isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = "index";
}

if (file_exists("pages/" . $page . ".php")) {
    require_once 'pages/' . $page . '.php';
} else {
    require_once 'pages/404.php';
}

?>