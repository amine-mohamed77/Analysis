#!/usr/bin/env php
<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';
use App\Converter;
use App\Calculator;

try {
    global $argv;

    $useJson = in_array('--json', $argv);

    // We specify numbers
    if ($argc >= 3 && !in_array('--json', $argv)) {
        [$a, $b] = array_map('intval', array_slice($argv, 1, 2));
    } else {
        // Read from input.txt
        $inputFile = __DIR__ . '/../samples/input.txt';
        if (!file_exists($inputFile)) {
            throw new RuntimeException("Input file does not exist: $inputFile");
        }
        $content = trim(file_get_contents($inputFile));
        [$a, $b] = array_map('intval', explode(' ', $content));
    }

    $convA = new Converter($a);
    $convB = new Converter($b);

    $and = Calculator::and($a,$b);
    $or  = Calculator::or($a,$b);
    $xor = Calculator::xor($a,$b);
    $notA = Calculator::not($a);

    $result = [
        'A' => ['decimal' => $a, 'binary' => $convA->toBinary()],
        'B' => ['decimal' => $b, 'binary' => $convB->toBinary()],
        'operations' => [
            'AND' => ['decimal'=>$and,'binary'=>decbin($and)],
            'OR'  => ['decimal'=>$or,'binary'=>decbin($or)],
            'XOR' => ['decimal'=>$xor,'binary'=>decbin($xor)],
            'NOT A' => ['decimal'=>$notA,'binary'=>decbin($notA)],
        ]
    ];

    if ($useJson) {
        $outputFile = __DIR__ . '/../samples/output.json';
        file_put_contents($outputFile, json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo "✅ Results written to output.json\n";
    } else {
        echo "Entrée A: {$result['A']['decimal']} ({$result['A']['binary']})\n";
        echo "Entrée B: {$result['B']['decimal']} ({$result['B']['binary']})\n\n";
        foreach ($result['operations'] as $op => $val) {
            echo "$op : {$val['decimal']} ({$val['binary']})\n";
        }
    }

} catch (\Throwable $e) {
    fwrite(STDERR, "Error: ".$e->getMessage()."\n");
    exit(1);
}
