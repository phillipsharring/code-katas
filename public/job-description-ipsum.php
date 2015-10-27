<?php

chdir(dirname(__DIR__));

include(realpath('vendor/autoload.php'));

use Acme\JobDescriptionIpsum;

$jobDescriptionIpsum = new JobDescriptionIpsum();

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Job Description</title>
        <style type="text/css">
            body {
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <?php echo $jobDescriptionIpsum->description(); ?>
    </body>
</html>
