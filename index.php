<?php
define("DATA", "data/");
define("PAGE", "includes/");;
define("SITE", "https://iletmishavalandirma.com/");
?>

<!doctype html>
<html class="no-js" lang="zxx">

<?= substr(include(DATA . "head.php"), 1, -1); ?>

<body>
    <?= substr(include(DATA . "preloader.php"), 1, -1); ?>
    <?= substr(include(DATA . "header.php"), 1, -1); ?>

    <?php
    if ($_GET && !empty($_GET["page"])) {
        $page = $_GET["page"] . ".php";
        if (file_exists(PAGE . $page)) {
            substr(include(PAGE . $page), 1, -1);
        } else {
            substr(include(PAGE . "main.php"), 1, -1);
        }
    } else {
        substr(include(PAGE . "main.php"), 1, -1);
    }

    ?>


    <?= substr(include(DATA . "footer.php"), 1, -1); ?>

    <?= substr(include(DATA . "backtotop.php"), 1, -1); ?>

    <?= substr(include(DATA . "socialfixed.php"), 1, -1); ?>

    <?= substr(include(DATA . "linkscripts.php"), 1, -1); ?>

</body>

</html>