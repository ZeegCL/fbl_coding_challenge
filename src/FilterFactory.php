<?php

namespace CodingChallenge;

use CodingChallenge\Filters\INumberFilter;
use CodingChallenge\Filters\DefaultNumberFilter;
use CodingChallenge\Filters\ModThreeNumberFilter;
use CodingChallenge\Filters\ModFiveNumberFilter;
use CodingChallenge\Filters\ModThreeFiveNumberFilter;

/**
 * Factory class that returns a filter strategy based on the
 * number given.
 */
final class FilterFactory
{
    protected const DEFAULT_STRATEGY = 0b000000000;

    protected static $strategyMap = [
        0b000000000 => DefaultNumberFilter::class,
        0b000001000 => ModThreeNumberFilter::class,
        0b000100000 => ModFiveNumberFilter::class,
        0b100000000 => ModThreeFiveNumberFilter::class,
    ];

    /**
     * Returns a filter to transform the given number, using a bitmask
     * to determine the correct strategy.
     *
     * @param integer $number Number to be printed
     * @return INumberFilter Strategy class that implements INumberFilter
     */
    public static function getStrategyFor(int $number) : INumberFilter
    {
        $modThree = ($number % 3) == 0;
        $modFive = ($number % 5) == 0;
        $bitMask = 0b00000001 << (3 * $modThree) << (5 * $modFive);
        $class = self::$strategyMap[$bitMask] ?? self::$strategyMap[self::DEFAULT_STRATEGY];

        return new $class;
    }
}