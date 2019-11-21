<header>
    <nav id="header">
        <ul>
            <li><a href="<?= $base_url ?>"><img src="images/LF_logo_NEW_H_W.png" alt="logo" /></a></li>
            <?php
            foreach ($pages as $page_name => $page_config) {
                if (isset($page_config["show"]) && !$page_config["show"]) continue;
                ?>
                <li <?= ($page_config == $target_page) ? "class=\"active\"" : "" ?>>
                    <a href="<?= $base_url ?>/?page=<?php echo ($page_name) ?>"><?php echo ($page_config["display_name"]) ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
        <div class="gcse-searchbox-only">
    </nav>
</header>