<?php

$dir = __DIR__;

$inFile = 'descriptions.txt';
$inPath = $dir . DIRECTORY_SEPARATOR . $inFile;

$fp = fopen($inPath, 'r');

$words = [];

while (false !== ($line = fgets($fp))) {
    $line = trim($line);
    $lower = strtolower($line);
    $letters = preg_replace('/[^a-z\s]/', '', $lower);
    $separated = explode(' ', $letters);

    foreach ($separated as $word) {
        $words[] = $word;
    }
}

fclose($fp);

$words = array_unique($words);

$outFile = 'seeds.txt';
$outPath = $dir . DIRECTORY_SEPARATOR . $outFile;

$fp = fopen($outPath, 'w');

fwrite($fp, implode("\n", $words));

fclose($fp);