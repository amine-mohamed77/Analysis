#!/usr/bin/env php
<?php

declare(strict_types=1);

require __DIR__ . '/../src/Converter.php';

use App\Converter;

if ($argc < 2 || !is_numeric($argv[1])) {
    fwrite(STDERR, "Usage: php bin/convert.php <entier>\n");
    exit(1);
}

$number = (int)$argv[1];

$converter = new Converter($number);

echo "Décimal : " . $converter->toDecimal() . PHP_EOL;
echo "Binaire : " . $converter->toBinary() . PHP_EOL;
echo "Hexa    : " . $converter->toHex() . PHP_EOL;
