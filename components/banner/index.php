<?php
    // $console_log = require '/Users/bronzebeard/Desktop/repos/PHP/website-template/utils/consoleLog.php';
    // var_dump($console_log($title));
    $scssToCss = require '/Users/bronzebeard/Desktop/repos/PHP/website-template/utils/scssToCss.php';
    var_dump($scssToCss(__DIR__ . '/banner.scss', __DIR__ . '/banner.css'));

    $bannerContent = "
        <a href=''>
            <img
                src='https://st.pond5.com/images/images_db/vlp/image-hero-poster.jpg'
                alt=title 
            />
            <div class='title'>
                This is the title of the banner
            </div>
        </a>";

    $banner = "
            <div class='topBanner'>
                {$bannerContent}
            </div>";

    echo $banner;
?>
