<?php
namespace App;

class Calculator {
    public static function and(int $a, int $b): int {
        return $a & $b;
    }

    public static function or(int $a, int $b): int {
        return $a | $b;
    }

    public static function xor(int $a, int $b): int {
        return $a ^ $b;
    }

    public static function not(int $a): int {
        return ~$a;
    }
}
