<?php


namespace App\Converters;


interface ConverterInterface
{
    /**
     * @see https://www.giss.nasa.gov/tools/mars24/help/algorithm.html
     * @see https://en.wikipedia.org/wiki/Timekeeping_on_Mars#Formulas_to_compute_MSD_and_MTC
     */
    public const TOTAL_SECONDS_PER_DAY = 86400;
    public const TOTAL_SECONDS_PER_SOL = 88775.244147;
    public const MSD_CORRECTION = 34127.2954262;
    public const MSD_ACCURACY = 5;
    public const CURRENT_LEAP_SECONDS = 37;
    public const MCT_TIME_FORMAT = 'H:i:s';

    public static function getConverterName();

    public static function convert($payload);
}