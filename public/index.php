<?php
session_start();
require_once __DIR__ . '/../materialize.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>AdLister of Death</title>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>