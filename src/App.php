<?php

namespace CodingChallenge;

use CodingChallenge\PrintableNumber;

/**
 * Application class that prints numbers from 1 to 100, replacing the values
 * when the numbers are multiple of 3, 5 or both.
 */
final class App
{
    public static function run() : void
    {
        print("Starting number printing...\n\n");

        for ($i = 1; $i <= 100; $i++) {
            $number = new PrintableNumber($i);

            printf("> %s\n", $number);
        }

        print("Finished!...\n\n");
    }
}
