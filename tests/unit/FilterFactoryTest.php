<?php

namespace CodingChallenge\Test;

use CodingChallenge\FilterFactory;
use CodingChallenge\Filters\DefaultNumberFilter;
use CodingChallenge\Filters\ModFiveNumberFilter;
use CodingChallenge\Filters\ModThreeFiveNumberFilter;
use CodingChallenge\Filters\ModThreeNumberFilter;
use PHPUnit\Framework\TestCase;

final class FilterFactoryTest extends TestCase
{
    public function test_it_returns_the_right_filter_for_multiple_of_three()
    {
        $filter = FilterFactory::getStrategyFor(99);
        $this->assertSame(ModThreeNumberFilter::class, get_class($filter));
    }

    public function test_it_returns_the_right_filter_for_multiple_of_five()
    {
        $filter = FilterFactory::getStrategyFor(20);
        $this->assertSame(ModFiveNumberFilter::class, get_class($filter));
    }

    public function test_it_returns_the_right_filter_for_multiple_of_three_and_five()
    {
        $filter = FilterFactory::getStrategyFor(15);
        $this->assertSame(ModThreeFiveNumberFilter::class, get_class($filter));
    }

    public function test_it_returns_the_right_filter_for_default_cases()
    {
        $filter = FilterFactory::getStrategyFor(4);
        $this->assertSame(DefaultNumberFilter::class, get_class($filter));
    }
}
