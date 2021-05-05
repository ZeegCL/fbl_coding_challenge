<?php

namespace CodingChallenge\Test;

use CodingChallenge\App;
use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{
    public function test_it_prints_a_number() : void
    {
        $this->expectOutputRegex('/.*[0-9]+.*/');
        App::run();
    }

    public function test_it_prints_falabella_message() : void
    {
        $this->expectOutputRegex('/.*Falabella.*/');
        App::run();
    }

    public function test_it_prints_it_message() : void
    {
        $this->expectOutputRegex('/.*IT.*/');
        App::run();
    }

    public function test_it_prints_integraciones_message() : void
    {
        $this->expectOutputRegex('/.*Integraciones.*/');
        App::run();
    }
}