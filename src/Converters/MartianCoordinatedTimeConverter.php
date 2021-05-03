<?php


namespace App\Converters;


class MartianCoordinatedTimeConverter implements ConverterInterface
{
    public static function getConverterName()
    {
        return "Martian Coordinated Time 'MTC'";
    }

    public static function convert($msdTime)
    {
        $mct = (int)round(fmod($msdTime, 1) * self::TOTAL_SECONDS_PER_DAY);
        $formattedMCT = gmdate(self::MCT_TIME_FORMAT, $mct);
        return $formattedMCT;
    }
}