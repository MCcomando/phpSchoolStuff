<?php
require_once("routing.php");
$target_page = $error_pages[404];
if (isset($_GET["page"])) {
    $p = $_GET["page"];
    if (isset($pages[$p])) {
        if (file_exists("templates/" . $pages[$p]["file"] . ".tpl.php") || file_exists("templates/" . $pages[$p]["file"] . ".html")) {
            $target_page = $pages[$p];
        }
    }
} else {
    $target_page = $pages["/"];
}
include("index.tpl.php");
?>