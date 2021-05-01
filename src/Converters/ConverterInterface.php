<?php


namespace App\Converters;


interface ConverterInterface
{
    public const TOTAL_SECONDS_PER_DAY = 86400;
    public const TOTAL_SECONDS_PER_SOL = 88775.244147;
    public const CORRECTION = 34127.2954262;
    public const MSD_ACCURACY = 5;
    public const CURRENT_LEAP_SECONDS = 37;
    public const MCT_TIME_FORMAT = 'H:i:s';

    public static function getConverterName();

    public static function convert($payload);
}