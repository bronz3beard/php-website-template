<?php
    return function ($inputFilename, $outputFilename) {
        $scss = new scssc();

        $scssIn = file_get_contents($inputFilename);
        $cssOut = $scss->compile($scssIn);
        file_put_contents($outputFilename, $cssOut);
    }
?>
