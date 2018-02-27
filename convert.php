<?php
// get filename to scan from command line
$filename = $argv[1] ?? '';
if (!$filename) {
    echo 'No filename provided' . PHP_EOL;
    echo 'Usage: ' . PHP_EOL;
    echo __FILE__ . ' <filename>' . PHP_EOL;
    exit;
}

// setup class autoloading
require __DIR__ . '/src/Application/Autoload/Loader.php';

// Add current directory to the path
Application\Autoload\Loader::init(__DIR__ . '/src');

// get the scanner
$convert = new Application\Parse\Convert();
echo $convert->scan($filename);
echo PHP_EOL;