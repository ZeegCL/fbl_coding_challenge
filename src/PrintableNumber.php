<?php

namespace CodingChallenge;

use CodingChallenge\FilterFactory;
use CodingChallenge\Filters\INumberFilter;

/**
 * Class that encapsulates a number and changes its printing
 * behaviour.
 */
class PrintableNumber
{
    /** @var int Number to be encapsulated. */
    protected int $number;

    /** @var INumberFilter Strategy that determines the printing behaviour. */
    protected INumberFilter $strategy;

    public function __construct(int $number)
    {
        $this->number = $number;
        $this->strategy = FilterFactory::getStrategyFor($number);
    }

    /**
     * Transforms the number to a string for printing, using
     * a predetermined strategy.
     *
     * @return string
     */
    public function toString() : string
    {
        return $this->strategy->filter($this->number);
    }

    /**
     * Override of PHP's magic function.
     *
     * @return string
     */
    public function __toString() : string
    {
        return $this->toString();
    }
}