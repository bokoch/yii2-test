<?php

namespace app\helpers;

class RandomDateHelper
{
    /**
     * Generate random timestamp of current year
     * @return int
     */
    public static function generateRandomDate()
    {
        // get timestamp of first day of current year
        $firstDayOfYear = (new \DateTime('first day of January ' . date('Y')))->getTimestamp();
        // get timestamp of last day of current year
        $lastDayOfYear = (new \DateTime('last day of December ' . date('Y')))->getTimestamp();

        $randomDateInt = rand($firstDayOfYear, $lastDayOfYear);

        return $randomDateInt;
    }
}