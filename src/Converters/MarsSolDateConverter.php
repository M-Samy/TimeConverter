<?php


namespace App\Converters;


class MarsSolDateConverter implements ConverterInterface
{

    public static function getConverterName()
    {
        return "Mars Sol Date 'MSD'";
    }

    public static function convert($payload)
    {
        $timestampWithLeapSeconds = $payload + self::CURRENT_LEAP_SECONDS;
        $msDate = $timestampWithLeapSeconds / self::TOTAL_SECONDS_PER_SOL + self::CORRECTION;
        $msdTime = round($msDate, self::MSD_ACCURACY);
        return $msdTime;
    }
}