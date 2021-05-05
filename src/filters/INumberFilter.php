<?php

namespace CodingChallenge\Filters;

/**
 * Interface used to implement different printing behaviours.
 */
interface INumberFilter
{
    /**
     * Function that takes a number and transforms it into a string for printing.
     *
     * @param integer $number
     * @return string
     */
    public static function filter(int $number) : string;
}