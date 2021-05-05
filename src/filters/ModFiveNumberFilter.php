<?php

namespace CodingChallenge\Filters;

use CodingChallenge\Filters\INumberFilter;

/**
 * Strategy class that transforms numbers that are multiples of 5.
 */
class ModFiveNumberFilter implements INumberFilter
{
    public static function filter(int $number) : string
    {
        return 'IT';
    }
}
