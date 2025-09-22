<?php

declare(strict_types=1);

namespace App;

class Converter
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function toDecimal(): string
    {
        return (string)$this->number;
    }

    public function toBinary(): string
    {
        return decbin($this->number);
    }

    public function toHex(): string
    {
        return strtoupper(dechex($this->number));
    }
}
