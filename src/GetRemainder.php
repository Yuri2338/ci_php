<?php

declare(strict_types=1);

namespace RemainderCalculator;

class GetRemainder
{
    public static function calculate(mixed $number1, mixed $number2): int|string
    {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            throw new \InvalidArgumentException("Both arguments must be numeric");
        }

        if ((int)$number2 === 0) {
            return "division by zero is bad";
        }

        return (int)($number1 % $number2);
    }
}