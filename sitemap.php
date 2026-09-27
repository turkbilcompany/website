<?php
header("Content-type: text/xml");

$links = [];
$dir = "pages/";
$files = scandir($dir);

array_push($links, "https://www.wisecptema.com/");

foreach ($files as $file) {
    if (is_file($dir . $file)) {
        if ($file != "404.php") {
            $file = explode(".php", $file);
            array_push($links, "https://www.wisecptema.com/$file[0]");
        }
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

foreach ($links as $link) {
    echo '<url>

        <loc>' . $link . '</loc>

        <changefreq>monthly</changefreq>


    </url>';
}

echo '</urlset>';
