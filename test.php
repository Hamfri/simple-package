<?php
require __DIR__ . '/vendor/autoload.php';
use SimplePackage\ForComposer\Simple;

$simple = new Simple();

echo "\n\n";
echo $simple->simpleFunction();
echo "\n\n";