<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
    require "vendor/leafo/scssphp/scss.inc.php";
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1); 

    $scssToCss = require 'utils/scssToCss.php';
    var_dump($scssToCss(__DIR__ . '/styles.scss', __DIR__ . '/styles.css'));
?>
<html lang="en">
    <head>
        <title>php website template</title>
        <link rel='stylesheet' type='text/css' href='/styles.css' />
        <link rel='stylesheet' type='text/css' href='/components/header/header.css' />
        <link rel='stylesheet' type='text/css' href='/components/banner/banner.css' />
        <link rel='stylesheet' type='text/css' href='/components/pageContent/pageContent.css' />
        <link rel='stylesheet' type='text/css' href='/components/footer/footer.css' />
    </head>
    <body>
        <?php include './components/header/index.php'; ?>
        <?php include './components/banner/index.php'; ?>
        <?php include './components/pageContent/index.php'; ?>
        <?php include './components/footer/index.php'; ?>
    </body>
</html>