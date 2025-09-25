<?php
namespace App;

class Converter {
    private int $number;

    public function __construct(int $number) {
        if ($number < 0) {
            throw new \InvalidArgumentException("Only positive integers are allowed.");
        }
        $this->number = $number;
    }

    public function toDecimal(): string {
        return (string)$this->number;
    }

    public function toBinary(): string {
        return decbin($this->number);
    }

    public function toHex(): string {
        return strtoupper(dechex($this->number));
    }
}
