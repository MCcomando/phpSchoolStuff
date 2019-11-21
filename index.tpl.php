<!DOCTYPE html>
<html>
<head>
    <title> Website - <?= $target_page["display_name"] ?> </title>
    <link href="styles/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script async src="https://cse.google.com/cse.js?cx=003454283568902731076:4td5l4zuedz"></script>
    <?php
    if (isset($target_page["style"]) && file_exists("styles/".$target_page["style"])) {
        ?>
        <link href="styles/<?= $target_page["style"] ?>" rel="stylesheet" />
        <?php
    }
    ?>
</head>

<body>
    <?php include("templates/header.tpl.php"); ?>
    <div id="content">
        <?php
            if (file_exists("templates/".$target_page["file"].".tpl.php")) {
                include("templates/".$target_page["file"].".tpl.php");
            } else if(file_exists("templates/".$target_page["file"].".html")) {
                readfile("templates/".$target_page["file"].".html");
            }
        ?>
    </div>
    <?php include("templates/footer.tpl.php") ?>
</body>
</html>