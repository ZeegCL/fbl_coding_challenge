<?php

namespace CodingChallenge\Filters;

use CodingChallenge\Filters\INumberFilter;

/**
 * Strategy class for the default printing behaviour.
 */
class DefaultNumberFilter implements INumberFilter
{
    public static function filter(int $number) : string
    {
        return strval($number);
    }
}
