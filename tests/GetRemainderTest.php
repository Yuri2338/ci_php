<?php

use RemainderCalculator\GetRemainder;

test('dividing by non-zero number', function () {
    expect(GetRemainder::calculate(5, 2))->toBe(1);
    expect(GetRemainder::calculate(10, 3))->toBe(1);
    expect(GetRemainder::calculate(7, 7))->toBe(0);
});

test('handling negative numbers', function () {
    expect(GetRemainder::calculate(-5, 2))->toBe(-1);
    expect(GetRemainder::calculate(5, -2))->toBe(1);
    expect(GetRemainder::calculate(-5, -2))->toBe(-1);
});

test('dividing by zero', function () {
    expect(GetRemainder::calculate(5, 0))->toBe("division by zero is bad");
});

test('non numeric', function () {
    expect(fn() => GetRemainder::calculate("abc", 2))->toThrow(\InvalidArgumentException::class);
    expect(fn() => GetRemainder::calculate(5, "abc"))->toThrow(\InvalidArgumentException::class);
    expect(fn() => GetRemainder::calculate(null, 2))->toThrow(\InvalidArgumentException::class);
});

test('handling float values', function() {
    expect(GetRemainder::calculate(5.5, 2))->toBe(1); 
    expect(GetRemainder::calculate(10.7, 3))->toBe(1);
});