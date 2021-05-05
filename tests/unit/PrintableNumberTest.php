<?php

namespace CodingChallenge\Test;

use CodingChallenge\PrintableNumber;
use PHPUnit\Framework\TestCase;

final class PrintableNumberTest extends TestCase
{
    public function test_it_returns_falabella_when_multiple_of_three() : void
    {
        $number = new PrintableNumber(99);
        $this->assertSame('Falabella', $number->toString());
    }

    public function test_it_returns_it_when_multiple_of_five() : void
    {
        $number = new PrintableNumber(20);
        $this->assertSame('IT', $number->toString());
    }

    public function test_it_returns_integraciones_when_multiple_of_three_and_five() : void
    {
        $number = new PrintableNumber(15);
        $this->assertSame('Integraciones', $number->toString());
    }

    public function test_it_returns_the_same_number_when_not_multiple_of() : void
    {
        $number = new PrintableNumber(4);
        $this->assertSame('4', $number->toString());
    }
}