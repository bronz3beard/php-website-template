<?php
    // $console_log = require '/Users/bronzebeard/Desktop/repos/PHP/website-template/utils/consoleLog.php';
    // var_dump($console_log($title));
    $scssToCss = require '/Users/bronzebeard/Desktop/repos/PHP/website-template/utils/scssToCss.php';
    var_dump($scssToCss(__DIR__ . '/header.scss', __DIR__ . '/header.css'));
    
    $title = "Header Item";

    $listHtml = "
            <ul>
                <li>
                    <a href='index.php'>
                        <span>{$title}</span>
                    </a>
                    <a href='pageOne.php'>
                        <span>{$title}</span>
                    </a>
                </li>
            </ul>";

    $waveSvg =
        "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 180 1440 79'>
            <path fill='#f3f4f5' fillOpacity='0.9' d='M0,256L24,250.7C48,245,96,235,144,240C192,245,240,267,288,250.7C336,235,384,181,432,186.7C480,192,528,256,576,250.7C624,245,672,171,720,149.3C768,128,816,160,864,181.3C912,203,960,213,1008,218.7C1056,224,1104,224,1152,202.7C1200,181,1248,139,1296,117.3C1344,96,1392,96,1416,96L1440,96L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z' />
        </svg>";

    $header =
        "<div class='header'>
            {$listHtml}
            {$waveSvg}
        </div>";
    echo $header;
?>