<?php

chdir(dirname(__DIR__));

include(realpath('vendor/autoload.php'));

use Acme\JobDescriptionIpsum;

$jobDescriptionIpsum = new JobDescriptionIpsum();
var_dump($jobDescriptionIpsum->description());
