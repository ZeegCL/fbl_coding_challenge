<?php

namespace CodingChallenge\Filters;

use CodingChallenge\Filters\INumberFilter;

/**
 * Strategy class that transforms numbers that are multiples of 3.
 */
class ModThreeNumberFilter implements INumberFilter
{
    public static function filter(int $number) : string
    {
        return 'Falabella';
    }
}
