<?php
    // $console_log = require '$scssToCss = require '../../utils/consoleLog.php';
    // var_dump($console_log($title));
    $scssToCss = require 'utils/scssToCss.php';
    var_dump($scssToCss(__DIR__ . '/pageContent.scss', __DIR__ . '/pageContent.css'));

    $title = "
        <h1>
          This is the page title
        </h1>";

    $imageGrid = "
        <section class='image-grid'>
            <img
              src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTj_uEI9iF_-r9KMMwJo7X137McY4h82GUNB5bHYqu_LYXvYwR0'
              alt='Train Tracks'
              class='inline'
            />
        </section>";
    $copy = "
        <p>
            This is where all the copy will go.
        </p>
    ";

    $content = "
        <section>
            {$title}
            {$imageGrid}
            {$copy}
        </section>";

    echo $content;
?>
