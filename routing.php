<?php
$pages = array(
    "/" => array("file" => "home", "display_name" => "Home", "style" => "home.css"),
    "about" => array("file" => "about", "display_name" => "About"),
    "projects" => array("file" => "projects", "display_name" => "Projects", "style" => "projects.css"),
    "videos" => array("file" => "videos", "display_name" => "Interesting videos"),
    "contact" => array("file" => "contact", "display_name" => "Contact"),
    "contact_send" => array("file" => "contact_send", "show" => false)
);

$base_url = "/php";

$error_pages = array(
    404 => array("file" => "404", "display_name" => "Page not found")
);
?>