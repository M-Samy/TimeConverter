<?php


namespace App\Converters;


class ConverterContext
{
    public function convertContextDate($payload)
    {
        $timestamp = $payload->getTimestamp();
        $msdData = MarsSolDateConverter::convert($timestamp);
        $mctData = MartianCoordinatedTimeConverter::convert($msdData);

        $response = [
            MarsSolDateConverter::getConverterName() => $msdData,
            MartianCoordinatedTimeConverter::getConverterName() => $mctData
        ];

        return $response;
    }
}