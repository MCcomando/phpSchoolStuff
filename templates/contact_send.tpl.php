<?php
$pattern = "/\w+(\.\w+)?@\w*\.\w+/";

if (isset($_POST["email"]) && isset($_POST["message"]) && $_POST["message"] != "") {
    if (!preg_match($pattern, $_POST["email"])) {
        ?>
            <span style="color: red;">
                Email is not valid.
            </span>
        <?php
    } else {
        echo ("email address: " . $_POST["email"] . "\n");
        echo ("message: \n" . $_POST["message"] . "\n");
    }
} else {
    ?>
        <span style="color: red;">
            Required fields not set
        </span>
    <?php
}
?>