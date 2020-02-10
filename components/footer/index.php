<?php
    // $console_log = require '/Users/bronzebeard/Desktop/repos/PHP/website-template/utils/consoleLog.php';
    // var_dump($console_log($title));
    $scssToCss = require '/Users/bronzebeard/Desktop/repos/PHP/website-template/utils/scssToCss.php';
    var_dump($scssToCss(__DIR__ . '/footer.scss', __DIR__ . '/footer.css'));

    $footerContent = "
        <p>
            THIS IS A FOOTER
        </p>";

    $footer = "
        <footer>
            {$footerContent}
        </footer>";

    echo $footer;
?>
